<?php

function mm_check_if_the_function_is_loaded() {
    global $included_files_list;
    global $file;
    
    foreach ( $included_files_list as $slug) {
        add_action('get_template_part_{$slug}', 'mm_print_file_name');
    }
}

function mm_print_file_name($slug) {
    if ('' !== $slug) {
        echo " <p> Filename : $slug </p>";
    }
}