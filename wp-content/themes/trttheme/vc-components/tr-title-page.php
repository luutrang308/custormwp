<?php

/*
Plugin Name: Slider Banner Homepgae
Plugin URI: https://trtheme.vn
Description: An extension for Visual Composer that display an community directory option
Author: TRCoder
Version: 1.0.0
Author URI: https://trtheme.vn
*/


class TrTitlePage extends WPBakeryShortCode
{
	
	function __construct()
	{
		add_action('init', array($this,'TrTitlePageShortCode'),999);
		add_shortcode('TrCodertitleBase',array($this,'renderTrTitlePage'));
	}

	public function TrTitlePageShortCode() {
		if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        } 

        vc_map(array(
        	'name'        => __('Title page','TrCoder'),
        	'base'        => 'TrCodertitleBase',
        	'description' => __('','TrCoder'),
        	'category'    => __('TrCategory Modules','TrCoder'),
        	'params'      => array (

                
        		array (
        			'type'    => 'textfield',
        			'holder'  => 'div',
        			'class'   => '',
        			'heading' => __('Heading', 'TrCoder'),
        			'param_name' => 'title_page',
        			'description' => __('Enter image','TrCoder'),
                    "value" => __('','TrCoder'),
                    "description" => __( "Style 2: Add class ' text-light ' ",'TrCoder' )
        		),
                array(
                    "type" => "textarea_html",
                    "holder" => "div",
                    "class" => "",                     
                    "heading" => __( "Content", 'TrCoder' ),
                    "param_name" => "content",
                    "value" => __( "<p>I am test text block. Click edit button to change this text.</p>", 'TrCoder' ),
                    "description" => __( "Enter content.", 'TrCoder' )
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

	public function renderTrTitlePage( $atts, $content, $tag ) {
		$atts = (shortcode_atts(array(
            'title_page'   => '',
            'extra_class'       => '',
            'element_id'        => ''
        ), $atts)); 

         $title_page       = esc_html($atts['title_page']);
         $content            = wpb_js_remove_wpautop($content, true);

        //Class and Id
        $extra_class        = esc_attr($atts['extra_class']);
        $element_id         = esc_attr($atts['element_id']);
        


        $output = '';
        $output .= '<div class="title ' . $extra_class . '" id="' . $element_id . '" >';
        $output .= '<span>Xi măng Nghi Sơn</span>';
        $output .= '<h2>';
        $output .= $title_page;
        $output .= '</h2>';
        $output .= '</div>';

        $output .= '<p class="description">';
        $output .= $content ;
        $output .= '</p>';

        return $output; 

	}


}
new TrTitlePage();