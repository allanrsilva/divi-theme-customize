<?php 

	function slideshow_shortcode ( $atts ) {
		$atts = extract( shortcode_atts( 
				array( 'default' => 'values' ),
			$atts ) 
		);
	
		// do shortcode actions here
	}
	add_shortcode( 'slideshow','slideshow_shortcode');


 ?>