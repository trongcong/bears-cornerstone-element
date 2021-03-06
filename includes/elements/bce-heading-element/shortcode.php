<?php
/**
 * Shortcode handler
 */
// echo '<pre>'; print_r($atts); echo '</pre>';
/* variable effect fade-in scroll */
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

/* custom font */
$layout_atts['color']          = ! empty( $color ) ? "color: {$color};" : ''; // color
$layout_atts['font-size']      = ! empty( $font_size ) ? "font-size: {$font_size};" : ''; // font-size
$layout_atts['line-height']    = ! empty( $line_height ) ? "line-height: {$line_height};" : ''; // line-height
$layout_atts['letter-spacing'] = ! empty( $letter_spacing ) ? "letter-spacing: {$letter_spacing};" : ''; // letter-spacing

$layout_atts['custom-font'] = $layout_atts['color'] . $layout_atts['font-size'] . $layout_atts['line-height'] . $layout_atts['letter-spacing'];


/* array variable */
$array_variable = array(
	'{level}'   => $level,
	'{content}' => $content,
	'{style}'   => implode( '', array( $layout_atts['custom-font'] ) ),
);

/* heading template - layout 1 */
$heading_temp = '<{level} style="{style}">{content}</{level}>';

/* class */
$class = "bce-element bce-heading-element {$class}";
?>
<div <?php cs_atts( array(
	'id'    => $id,
	'class' => $class,
	'style' => $style . $fade_animation_style
), true ); ?> <?php echo implode( ' ', array( $data, $fade ) ); ?>>
  <?php echo str_replace( array_keys( $array_variable ), array_values( $array_variable ), $heading_temp ); ?>
</div>
