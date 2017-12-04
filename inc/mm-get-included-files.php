<?php

function mm_strip_file_names($file_list) {

    $multi_file_list[];
    
    foreach($file_list as $filename) {
        $multi_file_list[$filename] = array (
            'template-name' => $filename
        );
    }
    
    foreach ($file_list as &$filename) {        
        if ( substr(strrchr($filename, "-"), 1) ) {
            $filename = substr(strrchr($filename, "-"), 1);
        }        
    }
    
    return $file_list;
}

function mm_get_included_files() {
    $files = array();
    $dir = opendir("/var/www/shantanu.com/htdocs/wp-content/themes/i-am-a/template-parts");
    
    while ($file = readdir($dir)) {
        if ($file != '.' && $file != '..') {
            $files[] = $file;
        }
    }

    closedir($dir);
    
    sort($files);

    echo "<h1> HERE </h1>";
//    print_r($files);
    
    $stripped_file_list = mm_strip_file_names($files);
    print_r($stripped_file_list);
    
    foreach($stripped_file_list as $slug) {
        add_action("get_template_part_{$slug}", 'mm_print_file_name');
    }
}

add_action('after_index', 'mm_get_included_files');
add_action('after_single', 'mm_get_included_files');
add_action('after_archive', 'mm_get_included_files');


function mm_print_file_name($slug) {
    if ('' !== $slug) {
        echo " <p> Filename : $slug </p>";
    } else {
        echo " <h1> Couldn't find the filename </h1>";
    }
}
