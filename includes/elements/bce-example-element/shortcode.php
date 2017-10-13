<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 10/1/2017 - 18:28
 * Project Name: bears-cornerstone-element
 */
/**
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
$class = "bce-element bce-example-element {$class}";
?>

<div <?php cs_atts( array(
	'id'    => $id,
	'class' => $class,
	'style' => $style . $fade_animation_style
), true ); ?> <?php echo implode( ' ', array( $data, $fade ) ); ?>>
<?php echo 'Hello, I\'m example! '; ?>
</div>
