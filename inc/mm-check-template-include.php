<?php

function get_template_include($t) {
    global $mentalmodel_current_templates;
    $mentalmodel_current_templates['main'] = wp_basename($t);
    return $t;
}

add_filter('template_include', 'get_template_include');

function mm_get_header($custom) {
    global $mentalmodel_current_templates;

    if (empty($custom)) {
        $suffix = '';
    } else {
        $suffix = '-' . $custom;
    }

    $mentalmodel_current_templates['header'] = 'header' . $suffix . '.php';
}

add_action('get_header', 'mm_get_header');

function mm_get_footer($custom) {
    global $mentalmodel_current_templates;

    if (empty($custom)) {
        $suffix = '';
    } else {
        $suffix = '-' . $custom;
    }

    $mentalmodel_current_templates['footer'] = 'footer' . $suffix . '.php';
}

add_action('get_footer', 'mm_get_footer');

function mm_get_sidebar($custom) {
    global $mentalmodel_current_templates;
    
    if (empty($custom)) {
        $suffix = '';
    } else {
        $suffix = '-' . $custom;
    }

    $mentalmodel_current_templates['sidebar'] = 'sidebar' . $suffix . '.php';
}

add_action('get_sidebar', 'mm_get_sidebar');

//function get_current_template(){
//    $GLOBALS['current_template_name'];
//    echo $current_template_name;
//}

