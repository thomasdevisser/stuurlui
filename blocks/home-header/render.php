<?php
/**
 * Renders the Pretitle block.
 *
 * @package strl
 */

$strl_pretitle  = ! empty( $attributes['pretitle'] ) ? $attributes['pretitle'] : '';
$strl_title     = ! empty( $attributes['title'] ) ? $attributes['title'] : '';
$strl_image_url = ! empty( $attributes['imageURL'] ) ? $attributes['imageURL'] : '';
?>
<section <?php echo wp_kses_post( get_block_wrapper_attributes( array( 'class' => 'home-header' ) ) ); ?>>
	<div class="left-col">
		<p class="pretitle"><?php echo esc_html( $strl_pretitle ); ?></p>
		<h2 class="block-title"><?php echo esc_html( $strl_title ); ?></h2>
	</div>
	<div class="right-col">
		<div class="media-wrapper">
			<img src="<?php echo esc_html( $strl_image_url ); ?>" />
		</div>
	</div>
</section>
