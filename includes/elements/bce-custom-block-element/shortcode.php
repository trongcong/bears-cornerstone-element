<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 10/1/2017 - 18:28
 * Project Name: bears-cornerstone-element
 */
/*
 * Shortcode handler
 */

//echo '<pre>';
//print_r( $atts );
//echo '</pre>';

if ( $fade == true ) {
	$fade = 'data-fade="true"';
	$data = cs_generate_data_attributes( 'column', array( 'fade' => true ) );
	switch ( $fade_animation ) {
		case 'in' :
			$fade_animation_offset = '';
			break;
		case 'in-from-top' :
			$fade_animation_offset = ' transform: translate(0, -' . $fade_animation_offset . '); ';
			break;
		case 'in-from-left' :
			$fade_animation_offset = ' transform: translate(-' . $fade_animation_offset . ', 0); ';
			break;
		case 'in-from-right' :
			$fade_animation_offset = ' transform: translate(' . $fade_animation_offset . ', 0); ';
			break;
		case 'in-from-bottom' :
			$fade_animation_offset = ' transform: translate(0, ' . $fade_animation_offset . '); ';
			break;
	}
	$fade_animation_style = 'opacity: 0;' . $fade_animation_offset . 'transition-duration: ' . $fade_duration . 'ms;';
} else {
	$data                 = '';
	$fade                 = '';
	$fade_animation_style = '';
}
/* class */
$class = "bce-element bce-custom-block-element {$class}";

/* array variable */
$style_block = ( ! empty( $image_bg ) ) ? 'background: url(' . $image_bg . ') no-repeat center center / cover, #000; ' : '';

$style_block .= ( ! empty( $block_height ) ) ? ' height: ' . $block_height . '; ' : '';

$array_variable = array(
	'{link}'                  => ( ! empty( $link ) ) ? $link : '#!',
	'{title}'                 => $title,
	'{title_transform}'       => $title_transform,
	'{description}'           => $description,
	'{description_transform}' => $description_transform,
	'{text_button}'           => $text_button,
	'{bg_options}'            => ( ! empty( $bg_options ) ) ? ' style="background-color: ' . $bg_options . '"; ' : '',
	'{style_block}'           => $style_block,
);


$template = array();
/* layout default */
$template['default'] = implode( '', array(
	'<div class="inner-wrap" style="{style_block}">',
	'<a class="item-inner" href="{link}"> ',
	'<div class="content" {bg_options}>',
	'<h4 class="heading" style="text-transform: {title_transform}; ">{title}</h4>',
	'<p class="description" style="text-transform: {description_transform}; ">{description}</p>',
	'<span class="readmore">',
	'<span>{text_button}</span>',
	'<svg class="icon" viewBox="0 0 20 20" x="0" y="0" width="100%" height="100%"> <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="square" stroke-miterlimit="10" d="M2 9.1h11.1"></path><path fill="currentColor" d="M13.1 13.3V4.8L19 9.1"></path></svg>',
	'</span>',
	'</div>',
	'</a>',
	'</div>',
) );
?>

<div <?php cs_atts( array(
	'id'    => $id,
	'class' => $class,
	'style' => $style . $fade_animation_style
), true ); ?> <?php echo implode( ' ', array( $data, $fade ) ); ?>>
  <?php echo str_replace( array_keys( $array_variable ), array_values( $array_variable ), $template['default'] ); ?>
</div>
