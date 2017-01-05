<?php
/**
* This file adds the Landing template to the Going Green Pro Theme.
*
* @author StudioPress
* @package Going Green Pro
* @subpackage Customizations
*/

/*
Template Name: Home
*/

// Remove header on front page
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );


add_action( 'genesis_after_entry', 'add_genesis_widget_area' );
function add_genesis_widget_area() {
                genesis_widget_area( 'custom-widget', array(
		'before' => '<div class="custom-widget widget-area">',
		'after'  => '</div>',
    ) );
}


//* Run the Genesis loop
genesis();