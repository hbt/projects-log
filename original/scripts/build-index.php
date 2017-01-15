#!/usr/bin/env php

<?php

@define(SOURCE_DIR, 'original/');
@define(TARGET_DIR, 'blog/');
assert_options(ASSERT_ACTIVE, true);
assert_options(ASSERT_WARNING, true);
assert_options(ASSERT_BAIL, true);

/**
 * Usage:
 * wf scripts/build-index.php
 *
 * modify files in IDE and index is automatically rebuilt + markdown files converted
 */


/**
 * generates files using my custom structure in map.php
 * Eeasier to manipulate and reorganize content
 * // TODO(hbt) ENHANCE replace by parser
 */
main();

function main()
{
    chdir(dirname(__FILE__) . '/../../');
    validate();


    createBlogDir();


    copyFiles();

    generateIndex();


    var_dump('================');
}

/**
 * verify all files and settings are good to go
 */
function validate()
{
    // where this file should be located
    assert(file_exists('original/scripts/build-index.php'));

    // file that contains generated map
    assert(file_exists('index.md'));

    // template file controlling index.md -- use %%map%% which will be replaced by generated map
    assert(file_exists('index-tmpl.md'));

    assert(stripos(file_get_contents('index-tmpl.md'), '%%map%%') !== false);

    // where the files in map are transformed. Directory is cleared. Store nothing there. 
    assert(file_exists('blog'));

    // where jekyll files are generated
    assert(file_exists('_site'));

    // where my files reside
    assert(file_exists('original'));

    // map location
    assert(file_exists('original/map.php'));
}

function generateIndex()
{
    $map = getMap();

    $content = '';


    /**
     * builds index.md string
     * goes through the map and generates a comparable index.md file
     *
     * @param $content
     * @param $level
     * @param $map
     */
    function buildIndex(&$content, $level, $map)
    {
        foreach ($map as $k => $v) {

            $space = str_repeat(' ', $level * 2);

            if (is_array($v)) {
                $line = $space . '* ' . $k;
                $content .= $line;
                $content .= "\n";

                $level++;
                buildIndex($content, $level, $v);

                $level--;
            } else {
                createFile($v);
                assert(file_exists(SOURCE_DIR . $v));
                $url = '/projects-log/blog/' . fixTitle($k, $v);
                $title = "[$k]($url)";


                $line = $space . '* ' . $title;
                $content .= $line;
                $content .= "\n";
            }
        }
    }

    $level = 0;
    buildIndex($content, $level, $map);

    // copy to index.md
    $index = $content;
    $content = file_get_contents('index-tmpl.md');
    $content = str_ireplace('%%map%%', $index, $content);
    file_put_contents('index.md', $content);
}

function createFile($filename)
{
    $fp = SOURCE_DIR . $filename;
    if (file_exists($fp))
        return;

    $m = [];
    preg_match('/\d+/', $filename, $m);
    assert(is_numeric($m[0]));
    assert(count($m) == 1);

    $fp = SOURCE_DIR . $m[0] . '.adoc';
    
    touch($fp);

}

/**
 * convert string into url title and ensure uniqueness (filename id)
 *
 * @param $title
 * @param $filename
 * @return mixed|string
 */
function fixTitle($title, $filename)
{
    $ret = trim(strtolower($title));
    $ret = preg_replace('/[^a-z0-9]+/', '-', $ret);
    $ret = trimTrailingDash($ret);

    $id = str_ireplace('.adoc', '', $filename);
    $ret .= '-' . $id;

    return $ret;
}

function trimTrailingDash($s)
{
    $p = explode('-', $s);
    $p = array_filter($p, function ($v) {
        return strlen($v) > 0;
    });
    $s = join('-', $p);

    return $s;
}

/**
 * copy files and rename
 * include headers
 */
function copyFiles()
{
    $map = getInlineMap();
    foreach ($map as $k => $v) {
        $title = fixTitle($k, $v);
        $filename = $title . '.adoc';

        /**
         *Example header
         *
         * ---
         * layout: post
         * title:  "Repeat Progress"
         * ---
         *
         */
        // add header to post content
        $content = file_get_contents(SOURCE_DIR . $v);
        $content = getPostHeaderTemplate() . "\n\n\n" . $content;
        $content = str_ireplace('%%layout%%', 'layout', $content);
        $content = str_ireplace('%%title%%', $k, $content);

        $tfilename = TARGET_DIR . $filename;
        file_put_contents($tfilename, $content);
        assert(file_exists($tfilename));
    }


    // all files converted successfully 
    assert(count(glob(TARGET_DIR . '*.adoc')) == count($map));
}

function getPostHeaderTemplate()
{
    return "---
layout: %%layout%%
title:  %%title%%
---";
}

function getInlineMap() 
{
    $ret = [];
    $map = getMap();
    buildMap($ret, $map);
    return $ret;
}

function getMap()
{
    // read map
    include SOURCE_DIR . 'map.php';
    // array defined in map.php
    assert(isset($map));
    
    $map = transformMap($map);

    return $map;
}

function transformMap($map)
{
    $transform = function($v) use (&$transform) {
        if(is_array($v)) {
            return array_map($transform, $v);
        } else {
            // postfix id with .adoc to match filename
            if($v) {
                $v .= '.adoc';
            }
        }
        return $v;
    };
    return array_map($transform, $map);
}

function buildMap(&$ret, $map)
{
    foreach ($map as $k => $v) {
        if (is_array($v)) {
            buildMap($ret, $v);
        } elseif (file_exists(SOURCE_DIR . $v)) {
            $ret[$k] = $v;
        }
    }
}

/**
 *
 */
function createBlogDir()
{
    // clean old dir
    if (file_exists(TARGET_DIR)) {
        $files = glob(TARGET_DIR . '/*.adoc');

        array_walk($files, function ($fn) {
            if (file_exists($fn) && is_file($fn)) {
                unlink($fn);
            }
        });
        rmdir(TARGET_DIR);
        assert(file_exists(TARGET_DIR) === false);
    }


    mkdir(TARGET_DIR);
    assert(file_exists(TARGET_DIR));
}


?>
