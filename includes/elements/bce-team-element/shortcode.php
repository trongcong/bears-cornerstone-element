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
$class = "bce-element bce-team-element {$class}";


/* array variable */
$array_variable = array(
	'{image}'    => ( ! empty( $image ) ) ? '<img src="' . $image . '" alt="' . $name . '" >' : '<img src="http://lorempixel.com/800/800/people/" alt="Random image" >',
	'{link}'     => ( ! empty( $link ) ) ? $link : '#!',
	'{name}'     => $name,
	'{position}' => $position,
);


$template = array();
/* layout default */
$template['default'] = implode( '', array(
	'<div class="team-wrap">',
	'<a class="team-inner" href="{link}"> ',
	'<span class="team-img">',
	'{image}',
	'<span class="overlay"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.9 20.9"><circle fill="none" stroke="#FFF" stroke-width="5.985" cx="10.4" cy="10.4" r="6.8"></circle></svg></span>',
	'</span>',
	'<h5 class="team-name">{name}</h5>',
	'<h6 class="team-position">{position}</h6>',
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
