<?php 
	
	$template_directory = get_template_directory_uri();
	define(THEME_DIR, $template_directory.'-child');

	//include '/includes/shortcodes/core.php';
	
	$template_directory = get_template_directory();

	require_once( $template_directory . '-child/includes/custom-admin-page-builder.php' );
	
	wp_register_script( 'custom-script', THEME_DIR . '/assets/js/custom.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'custom-script' );


	wp_register_script( 'admin-custom-script', THEME_DIR . '/assets/js/admin-custom.js', array( 'jquery','jquery-ui-core', 'underscore', 'backbone' ), '1', true );
	wp_enqueue_script( 'admin-custom-script' );

	wp_localize_script( 'admin-custom-script', 'et_pb_options', array(
		'ajaxurl'                       => admin_url( 'admin-ajax.php' ),
		'et_load_nonce'                 => wp_create_nonce( 'et_load_nonce' ),
		'images_uri'                    => get_template_directory_uri() . '/images',
		'section_only_row_dragged_away' => __( 'The section should have at least one row.', 'Divi' ),
		'fullwidth_module_dragged_away' => __( 'Fullwidth module can\'t be used outside of the Fullwidth Section.', 'Divi' ),
		'stop_dropping_3_col_row'       => __( '3 column row can\'t be used in this column.', 'Divi' ),
		'preview_image'                 => __( 'Preview', 'Divi' ),
		'empty_admin_label'             => __( 'Module', 'Divi' ),
	) );


	function divi_docs_dequeue_script() {
	   	wp_dequeue_script( 'et_pb_admin_js' );
	}

	add_action( 'wp_print_scripts', 'divi_docs_dequeue_script', 100 );

 ?>