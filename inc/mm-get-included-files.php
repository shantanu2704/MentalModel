<?php


function mm_get_included_files()
{
    global $mm_included_files;
    $mm_included_files = get_included_files();
}

add_action('after_index', 'mm_get_included_files');
add_action('after_single', 'mm_get_included_files');
add_action('after_archive', 'mm_get_included_files');