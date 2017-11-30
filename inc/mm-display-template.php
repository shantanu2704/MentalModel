<?php

function mm_display_header_file() {
    global $mentalmodel_current_templates;

    if ( !empty($mentalmodel_current_templates['header'])) {
        echo '<p> Header comes from: ' . $mentalmodel_current_templates['header'];
        echo '</p>';
    } else {
        echo " <p>Can't display source. </p>";
    }
}

add_action('after_header', 'mm_display_header_file');

function mm_display_footer_file() {
    global $mentalmodel_current_templates;

    if ( !empty($mentalmodel_current_templates['footer'])) {
        echo '<p> Footer comes from: ' . $mentalmodel_current_templates['footer'];
        echo '</p>';
    } else {
        echo " <p>Can't display source. </p>";
    }
}

add_action('after_footer', 'mm_display_footer_file');

function mm_display_sidebar_file() {
    global $mentalmodel_current_templates;

    if ( !empty($mentalmodel_current_templates['sidebar'])) {
        echo '<p> Sidebar comes from: ' . $mentalmodel_current_templates['sidebar'];
        echo '</p>';
    } else {
        echo " <p>Can't display source. </p>";
    }
}

add_action('after_sidebar', 'mm_display_sidebar_file');
