<?php
/*
Plugin Name: Easy Digital Downloads - Add New PDF Stamper Template Tag
Description: Adds a special new template tag for use with the PDF Stamper extension to EDD.
Author: Kyle Maurer
License: GPL2
*/

// Callback used for template tag
function process_my_template_tag() {
    $string = 'Success!';

    return $string;
}
// Add the new template tag
function kjm_add_pdf_stamper_tag() {
	edd_pdf_stamper_add_template_tag(
		'just_testing',
		'Only a test',
		'extension',
		array( 'template' ),
		'process_my_template_tag'
		);
}
add_action( 'edd_pdf_stamper_add_template_tags', 'kjm_add_pdf_stamper_tag' );
