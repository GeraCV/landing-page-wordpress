<?php
/**
 * Recommended plugins
 *
 * @package Bloge
 */
if ( ! function_exists( 'bloge_recommended_plugins' ) ) :
	/**
	 * Recommend plugins.
	 *
	 * @since 1.0.0
	 */
	function bloge_recommended_plugins() {
		
		$plugins = array(
            array(
				'name'     => esc_html__( 'Yoast', 'bloge' ),
				'slug'     => 'wordpress-seo',
				'required' => false,
			),			
			array(
				'name'     => esc_html__( 'Contact Us', 'bloge' ),
				'slug'     => 'contact-form-7',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'Social Feed', 'bloge' ),
				'slug'     => 'wp-social-feed',
				'required' => false,
			),
			array(
                'name'     => esc_html__( 'Rankchecker.io Integration', 'business-way' ),
                'slug'     => 'rankchecker-io-integration',
                'required' => false,
            ),
		);
		tgmpa( $plugins );
	}
endif;
add_action( 'tgmpa_register', 'bloge_recommended_plugins' );
