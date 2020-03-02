<?php
/**
 * Class Corus_Enqueue_Scripts
 */

if( !class_exists( 'Corus_Enqueue_Scripts' ) ):
class Corus_Enqueue_Scripts extends Corus_Init {


	/**
	 * Corus_Enqueue_Scripts constructor.
	 */
	public function __construct() {
		parent::__construct();

		add_action( 'wp_enqueue_scripts', array( $this, 'front_scripts' ) );
	}

	/**
	 * front_scripts
	 */
	public function front_scripts () {
		wp_enqueue_style( $this->prefix . 'stylesheet', get_stylesheet_uri() );
		wp_enqueue_style( $this->prefix . '-slick',  $this->theme_url . '/components/slick-slider/slick.css', [], time() );
		wp_enqueue_style( $this->prefix . '-slick-theme',  $this->theme_url . '/components/slick-slider/slick-theme.css', [], time() );
		wp_enqueue_script( $this->prefix . '-slick', $this->theme_url . '/components/slick-slider/slick.min.js', ['jquery'], time(), true );
		wp_enqueue_script( $this->prefix . '-front', $this->theme_url . '/front.js', ['jquery'], time(), true );
	}
}

new Corus_Enqueue_Scripts();
endif;
