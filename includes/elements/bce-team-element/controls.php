<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 10/1/2017 - 18:26
 * Project Name: bears-cornerstone-element
 * Element Controls
 */

return array(
	'image'    => array(
		'type' => 'image',
		'ui'   => array(
			'title'   => __( 'Image Member ', 'bce' ),
			'tooltip' => __( 'Choose an image member .', 'bce' ),
		)
	),
	'link'     => array(
		'type' => 'text',
		'ui'   => array(
			'title'   => __( 'Link member', 'bce' ),
			'tooltip' => __( 'Enter link member .', 'bce' ),
		),
	),
	'name'     => array(
		'type' => 'text',
		'ui'   => array(
			'title'   => __( 'Member Name. ', 'bce' ),
			'tooltip' => __( 'Enter name member .', 'bce' ),
		),
	),
	'position' => array(
		'type' => 'text',
		'ui'   => array(
			'title'   => __( 'Position. ', 'bce' ),
			'tooltip' => __( 'Enter position member .', 'bce' ),
		),
	),

	'fade' => array(
		'type' => 'toggle',
		'ui'   => array(
			'title'   => __( 'Enable Fade Effect', 'bce' ),
			'tooltip' => __( 'Activating will make this element fade into view when the user scrolls to it for the first time.', 'bce' ),
		)
	),

	'fade_animation' => array(
		'type'      => 'choose',
		'ui'        => array(
			'title'   => __( 'Fade Direction', 'bce' ),
			'tooltip' => __( 'Choose a direction to fade from. "None" will allow the element to fade in without coming from a particular direction.', 'bce' ),
		),
		'options'   => array(
			'columns' => '5',
			'choices' => array(
				array( 'value' => 'in', 'tooltip' => __( 'None', 'bce' ), 'icon' => fa_entity( 'ban' ) ),
				array(
					'value'   => 'in-from-bottom',
					'tooltip' => __( 'Top', 'bce' ),
					'icon'    => fa_entity( 'arrow-up' )
				),
				array(
					'value'   => 'in-from-left',
					'tooltip' => __( 'Right', 'bce' ),
					'icon'    => fa_entity( 'arrow-right' )
				),
				array(
					'value'   => 'in-from-top',
					'tooltip' => __( 'Bottom', 'bce' ),
					'icon'    => fa_entity( 'arrow-down' )
				),
				array(
					'value'   => 'in-from-right',
					'tooltip' => __( 'Left', 'bce' ),
					'icon'    => fa_entity( 'arrow-left' )
				)
			)
		),
		'condition' => array( 'fade' => true )
	),

	'fade_animation_offset' => array(
		'type'      => 'text',
		'ui'        => array(
			'title'   => __( 'Offset', 'bce' ),
			'tooltip' => __( 'Determines how drastic the fade effect will be.', 'bce' ),
		),
		'condition' => array(
			'fade'           => true,
			'fade_animation' => array( 'in-from-top', 'in-from-left', 'in-from-right', 'in-from-bottom' )
		)
	),

	'fade_duration' => array(
		'type'      => 'text',
		'ui'        => array(
			'title'   => __( 'Duration', 'bce' ),
			'tooltip' => __( 'Determines how long the fade effect will be.', 'bce' ),
		),
		'condition' => array( 'fade' => true )
	),

	'common' => array( 'padding', 'margin', 'border', 'text_align' ),
);
