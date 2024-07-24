<?php
/**
 * Recommended plugins
 *
 * @package photography-elementor
 */

if ( ! function_exists( 'photography_elementor_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function photography_elementor_recommended_plugins() {

        $plugins = array(  

            array(
                'name'     => esc_html__( 'Testerwp Ecommerce Companion', 'photography-elementor' ),
                'slug'     => 'testerwp-ecommerce-companion',
                'required' => false,
            ),              
            array(
                'name'     => esc_html__( 'One Click Demo Import', 'photography-elementor' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Elementor Website Builder', 'photography-elementor' ),
                'slug'     => 'elementor',
                'required' => false,
            ),
             array(
                'name'     => esc_html__( 'ElementsKit Lite', 'photography-elementor' ),
                'slug'     => 'elementskit-lite',
                'required' => false,
            ),
             array(
                'name'     => esc_html__( 'WooCommerce', 'photography-elementor' ),
                'slug'     => 'woocommerce',
                'required' => false,
            ),
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'photography_elementor_recommended_plugins' );