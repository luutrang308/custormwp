<?php

/*
Plugin Name: WPC Directory
Plugin URI: https://wpcodeus.com/
Description: An extension for Visual Composer that display an community directory option
Author: WP Codeus
Version: 1.0.0
Author URI: https://wpcodeus.com/
*/


class VcSodaBlockquote extends WPBakeryShortCode { // kế thừa từ wpbakery pagebuilder

    function __construct() {
        add_action( 'init', array( $this, 'create_shortcode' ), 999 );            
        add_shortcode( 'vc_soda_blockquote', array( $this, 'render_shortcode' ) );

    }        


    // tạo các file
    public function create_shortcode() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }        

        // Map blockquote with vc_map()
        vc_map( array(
            'name'          => __('Blockquote', 'sodawebmedia'),
            'base'          => 'vc_soda_blockquote',
            'description'   => __( '', 'sodawebmedia' ),
            'category'      => __( 'SodaWebMedia Modules', 'sodawebmedia'),                
            'params' => array(

                array(
                    "type" => "textarea_html",
                    "holder" => "div",
                    "class" => "",                     
                    "heading" => __( "Blockquote Content", 'sodawebmedia' ),
                    "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
                    "value" => __( "<p>I am test text block. Click edit button to change this text.</p>", 'sodawebmedia' ),
                    "description" => __( "Enter content.", 'sodawebmedia' )
                ),    

                array(
                    'type'          => 'textfield',
                    'holder'        => 'div',
                    'heading'       => __( 'Author Quote', 'sodawebmedia' ),
                    'param_name'    => 'quote_author',
                    'value'         => __( '', 'sodawebmedia' ),
                    'description'   => __( 'Add Author Quote.', 'sodawebmedia' ),
                ),


                array(
                    "type" => "vc_link",
                    "class" => "",
                    "heading" => __( "Blockquote Cite", 'sodawebmedia' ),
                    "param_name" => "blockquote_cite",
                    "description" => __( "Add Citiation Link and Source Name", 'sodawebmedia' ),                                                
                ),    

                array(
                    'type'          => 'textfield',
                    'heading'       => __( 'Element ID', 'sodawebmedia' ),
                    'param_name'    => 'element_id',
                    'value'             => __( '', 'sodawebmedia' ),
                    'description'   => __( 'Enter element ID (Note: make sure it is unique and valid).', 'sodawebmedia' ),
                    'group'         => __( 'Extra', 'sodawebmedia'),
                ),

                array(
                    'type'          => 'textfield',
                    'heading'       => __( 'Extra class name', 'sodawebmedia' ),
                    'param_name'    => 'extra_class',
                    'value'             => __( '', 'sodawebmedia' ),
                    'description'   => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'sodawebmedia' ),
                    'group'         => __( 'Extra', 'sodawebmedia'),
                ),               
            ),
        ));             

    }


    // render shortcode
    public function render_shortcode( $atts, $content, $tag ) {
        $atts = (shortcode_atts(array(
            'blockquote_cite'   => '',
            'quote_author'      => '',
            'extra_class'       => '',
            'element_id'        => ''
        ), $atts));


        //Content 
        $content            = wpb_js_remove_wpautop($content, true);
        $quote_author       = esc_html($atts['quote_author']);

        //Cite Link
        $blockquote_source  = vc_build_link( $atts['blockquote_cite'] );
        $blockquote_title   = esc_html($blockquote_source["title"]);
        $blockquote_url     = esc_url( $blockquote_source['url'] );

        //Class and Id
        $extra_class        = esc_attr($atts['extra_class']);
        $element_id         = esc_attr($atts['element_id']);
        


        $output = '';
        $output .= '<div class="blockquote ' . $extra_class . '" id="' . $element_id . '" >';
        $output .= '<blockquote cite="' . $blockquote_url . '">';
        $output .= $content;
        $output .= '</blockquote>';
        $output .= '</div>';

        return $output;                  

    }

}

new VcSodaBlockquote();