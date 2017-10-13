<?php
/**
 * Element Controls
 */

return array(
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

	'fade_duration'     => array(
		'type'      => 'text',
		'ui'        => array(
			'title'   => __( 'Duration', 'bce' ),
			'tooltip' => __( 'Determines how long the fade effect will be.', 'bce' ),
		),
		'condition' => array( 'fade' => true )
	),

	/* General params */
	'content'           => array(
		'type' => 'textarea',
		'ui'   => array(
			'title'   => __( 'Text', 'bce' ),
			'tooltip' => __( 'Text to be placed inside the heading element.', 'bce' ),
		)
	),
	'level'             => array(
		'type'    => 'select',
		'ui'      => array(
			'title'   => __( 'Heading Level', 'bce' ),
			'tooltip' => __( 'Determines which heading level should be used in the actual HTML.', 'bce' ),
		),
		'options' => array(
			'choices' => array(
				array( 'value' => 'h1', 'label' => __( 'h1', 'bce' ) ),
				array( 'value' => 'h2', 'label' => __( 'h2', 'bce' ) ),
				array( 'value' => 'h3', 'label' => __( 'h3', 'bce' ) ),
				array( 'value' => 'h4', 'label' => __( 'h4', 'bce' ) ),
				array( 'value' => 'h5', 'label' => __( 'h5', 'bce' ) ),
				array( 'value' => 'h6', 'label' => __( 'h6', 'bce' ) ),
				array( 'value' => 'div', 'label' => __( 'Div', 'bce' ) ),
				array( 'value' => 'p', 'label' => __( 'P', 'bce' ) ),
				array( 'value' => 'span', 'label' => __( 'Span', 'bce' ) ),
			)
		),
	),
	'color'             => array(
		'type' => 'color',
		'ui'   => array(
			'title' => __( 'Color', 'bce' )
		)
	),
	'font_size'         => array(
		'type' => 'text',
		'ui'   => array(
			'title' => __( 'Font Size', 'bce' )
		)
	),
	'line_height'       => array(
		'type' => 'text',
		'ui'   => array(
			'title' => __( 'Line Height', 'bce' )
		)
	),
	'letter_spacing'    => array(
		'type' => 'text',
		'ui'   => array(
			'title' => __( 'Letter Spacing', 'bce' )
		)
	),
	'common'            => array( 'padding', 'margin', 'border', 'text_align' ),
);
