<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class blog_bank_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require get_template_directory() . '/inc/info/section-pro.php';

		// Register custom section types.
		$manager->register_section_type( 'blog_bank_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new blog_bank_Customize_Section_Pro(
				$manager,
				'blog-bank',
				array(
					'title'    => esc_html__( 'Now Available blog-bank Pro', 'blog-bank' ),
					'pro_text' => esc_html__( 'Go Pro','blog-bank' ),
					'pro_url'  => 'https://wpthemespace.com/product/blog-bank/',
					'priority' => 10, 
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'blog-bank-customize-controls', trailingslashit( get_template_directory_uri() ) . 'inc/info/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'blog-bank-customize-controls', trailingslashit( get_template_directory_uri() ) . 'inc/info/customize-controls.css', array(),'1.1.3','all' );
	}
}

// Doing this customizer thang!
blog_bank_Customize::get_instance();
