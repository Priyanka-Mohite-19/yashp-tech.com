<?php
/**
 * Construction Light: Block Patterns
 *
 * @since Construction Light 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Construction Light 1.0
 *
 * @return void
 */
function construction_light_fse_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'construction-light' => array( 'label' => __( 'Construction Light', 'construction-light' ) )
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Construction Light 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'construction_light_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'construction_light_fse_register_block_patterns', 9 );
