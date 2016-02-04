<?php
/**
 * Plugin Name: Google Translate Short Code
 * Plugin URI: https://github.com/JustinByrne/Google-Translate-SC
 * Description: This plugin adds a shortcode to add a Google translate button
 * Version: 1.0.1
 * Author: Justin Byrne
 * Author URI: http://jnm-tech.co.uk
 * License: GPL2
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once( ABSPATH . 'wp-includes/pluggable.php' );
require_once( 'gtsc-updater.php' );

// creating a new plugin update instant
if ( is_admin() ) {

	new gtscUpdater( __FILE__, 'JustinByrne', "Google-Translate-SC" );

}

new GoogleTranslateSC();

class GoogleTranslateSC {

	public function __construct()	{

		// adding widget shortcode support
		add_filter( 'widget_text', 'shortcode_unautop');
		add_filter( 'widget_text', 'do_shortcode');

		// adding new shortcode
		add_shortcode( 'google-translate', array( $this, 'shortcode' ) );

	}

	public function shortcode( $atts )	{

		extract( shortcode_atts( array(

			'style' => 'simple',
		
		), $atts ) );

		switch( $style )	{
			case 'simple':
				$element = "new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');";
				break;
			case 'horizontal':
				$element = "new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');";
				break;
			case 'vertical':
				$element = "new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');";
				break;
		}

		$html = '
			<div id="google_translate_element"></div>
			<script type="text/javascript">
				function googleTranslateElementInit() {
					' . $element . '
				}
			</script>
			<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		';

		return $html;

	}

}