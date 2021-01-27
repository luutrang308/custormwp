<?php

/*
Plugin Name: Slider Banner Homepgae
Plugin URI: https://trtheme.vn
Description: An extension for Visual Composer that display an community directory option
Author: TRCoder
Version: 1.0.0
Author URI: https://trtheme.vn
*/


class TrSliderBanner extends WPBakeryShortCode
{
	
	function __construct()
	{
		add_action('init', array($this,'TrSliderBannerShortCode'),999);
		add_shortcode('TrCoderBase',array($this,'renderTrSliderBanner'));
	}

	public function TrSliderBannerShortCode() {
		if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        } 

        vc_map(array(
        	'name'        => __('Slider Banner','TrCoder'),
        	'base'        => 'TrCoderBase',
        	'description' => __('','TrCoder'),
        	'category'    => __('TrCategory Modules','TrCoder'),
        	'params'      => array (

        		array (
        			'type'    => 'attach_images',
        			'holder'  => 'div',
        			'class'   => '',
        			'heading' => __('Image Slide', 'TrCoder'),
        			'param_name' => 'images_banner',
        			'description' => __('Enter image','TrCoder')
        		),
        		array(
                    'type'          => 'textfield',
                    'heading'       => __( 'Element ID', 'TrCoder' ),
                    'param_name'    => 'element_id',
                    'value'             => __( '', 'TrCoder' ),
                    'description'   => __( 'Enter element ID (Note: make sure it is unique and valid).', 'sodawebmedia' ),
                    'group'         => __( 'Extra', 'TrCoder'),
                ),

                array(
                    'type'          => 'textfield',
                    'heading'       => __( 'Extra class name', 'TrCoder' ),
                    'param_name'    => 'extra_class',
                    'value'             => __( '', 'TrCoder' ),
                    'description'   => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'sodawebmedia' ),
                    'group'         => __( 'Extra', 'TrCoder'),
                ),
        	),
        ));
	}

	public function renderTrSliderBanner( $atts, $content, $tag ) {
		$gallery = shortcode_atts(
		    array(
		    'images_banner'  =>  'images_banner',
		  ),
		    $atts );
		  // Attributes in var
		  $image_ids=explode(',',$gallery['images_banner']);


		  // Output Code
		  $output .= '<div class="section_slider_banner wow fadeInUp" data-wow-delay="300ms">';

		  foreach( $image_ids as $image_id ){
		    $output .='<div class="img">';
		    $output .= wp_get_attachment_image( $image_id, 'full' );
		    $output .='</div>';
		  }
		  
		  $output .= '</section>';

		  return $output;    

	}


}
new TrSliderBanner();