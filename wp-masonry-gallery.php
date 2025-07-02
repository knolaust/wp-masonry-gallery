/**
 * Plugin Name: WP Masonry Gallery
 * Description: Adds a masonry-style layout option to the core Gallery block using Masonry.js.
 * Version: 1.0.0
 * Author: Knol Aust
 * License: GPL2+
 * Text Domain: wp-masonry-gallery
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue frontend and editor assets for the masonry layout.
 */
function wpmg_enqueue_assets() {
    // Masonry is included with WordPress core
    wp_enqueue_script( 'masonry' );

    // Frontend script
    if ( ! is_admin() ) {
        wp_enqueue_script(
            'wpmg-masonry-init',
            plugin_dir_url( __FILE__ ) . 'assets/js/wpmg-masonry-init.js',
            array( 'jquery', 'masonry', 'imagesloaded' ),
            '1.0.0',
            true
        );
        wp_enqueue_style(
            'wpmg-masonry-style',
            plugin_dir_url( __FILE__ ) . 'assets/css/wpmg-masonry-style.css',
            array(),
            '1.0.0'
        );
    }
}
add_action( 'enqueue_block_assets', 'wpmg_enqueue_assets' );

/**
 * Enqueue editor-only scripts/styles.
 */
function wpmg_enqueue_editor_assets() {
    wp_enqueue_script(
        'wpmg-editor-masonry',
        plugin_dir_url( __FILE__ ) . 'assets/js/wpmg-editor.js',
        array( 'wp-blocks', 'wp-dom' ),
        '1.0.0',
        true
    );
    wp_enqueue_style(
        'wpmg-editor-style',
        plugin_dir_url( __FILE__ ) . 'assets/css/wpmg-editor.css',
        array(),
        '1.0.0'
    );
}
add_action( 'enqueue_block_editor_assets', 'wpmg_enqueue_editor_assets' );

/**
 * Register a custom block style for the core/gallery block.
 */
function wpmg_register_block_style() {
    register_block_style(
        'core/gallery',
        array(
            'name'  => 'masonry',
            'label' => __( 'Masonry', 'wp-masonry-gallery' ),
        )
    );
}
add_action( 'init', 'wpmg_register_block_style' );
