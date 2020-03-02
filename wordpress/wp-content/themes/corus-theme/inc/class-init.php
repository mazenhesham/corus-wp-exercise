<?php
/**
 * Class Corus_Init
 */
if ( !class_exists( 'Corus_Init' ) ):
	class Corus_Init {


		/**
		 * @var string $prefix
		 */
		public $prefix;


		/**
		 * @var string $theme_url
		 */
		public $theme_url;


		/**
		 * @var string $theme_dir
		 */
		public $theme_dir;



		/**
		 * Corus_Init constructor.
		 */
		public function __construct() {
			$this->prefix     = 'corus';
			$this->theme_url  = get_template_directory_uri();
			$this->theme_dir  = get_template_directory();
		}


		public function main_imports() {

			require_once $this->theme_dir . '/inc/class-corus-custom-post.php';
			require_once $this->theme_dir . '/inc/class-corus-enqueue-scripts.php';
		}


	}
	new Corus_Init();

endif;