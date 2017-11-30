<?php

function mm_sort_included_files() {
    global $included_files;
    sort($included_files);
}

function mm_create_included_files_list() {
    global $included_files;
    global $$included_files_list;
    global $template;
    global $template_relative_path;

    $included_files_list = '';
    $template_relative_path = str_replace( ABSPATH . 'wp-content/', '', $template );
    
    foreach($included_files as $filename){
        if ( strstr( $filename, 'themes' ) ) {
            $filepath = strstr( $filename, 'themes' );
            if ( $template_relative_path == $filepath ) {
                $included_files_list .= '';
            }
            else {
                $included_files_list .= $filepath;
            }
        }
    }
}

function mm_strip_file_names() {
    global $$included_files_list;
    
    foreach ( $included_files_list as $filename){
        $filename = substr( strrchr( $filename, "/" ), 1 );
    }
}
