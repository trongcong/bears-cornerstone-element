<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 10/1/2017 - 18:26
 * Project Name: bears-cornerstone-element
 * Element Controls
 */

return array(

	/* Require params */
	'image_bg'              => array(
		'type' => 'image',
		'ui'   => array(
			'title'   => __( 'Image Background', 'bce' ),
			'tooltip' => __( 'Choose an image background.', 'bce' ),
		)
	),
	'link'                  => array(
		'type' => 'text',
		'ui'   => array(
			'title'   => __( 'Block url', 'bce' ),
			'tooltip' => __( 'Enter block url.', 'bce' ),
		)
	),
	'block_height'          => array(
		'type' => 'text',
		'ui'   => array(
			'title'   => __( 'Block Height', 'bce' ),
			'tooltip' => __( 'Enter block height(default: 400px).', 'bce' ),
		)
	),
	'title'                 => array(
		'type' => 'text',
		'ui'   => array(
			'title'   => __( 'Title Heading', 'bce' ),
			'tooltip' => __( 'Enter title heading.', 'bce' ),
		)
	),
	'title_transform'       => array(
		'type'    => 'select',
		'ui'      => array(
			'title'   => __( 'Heading text transform', 'bce' ),
			'tooltip' => __( 'Select heading text transform.', 'bce' ),
		),
		'options' => array(
			'choices' => array(
				array( 'value' => 'none', 'label' => __( 'None', 'bce' ) ),
				array( 'value' => 'uppercase', 'label' => __( 'Uppercase', 'bce' ) ),
				array( 'value' => 'capitalize', 'label' => __( 'Capitalize', 'bce' ) ),
				array( 'value' => 'lowercase', 'label' => __( 'Lowercase', 'bce' ) ),
			)
		)
	),
	'description'           => array(
		'type' => 'textarea',
		'ui'   => array(
			'title'   => __( 'Description', 'bce' ),
			'tooltip' => __( 'Enter description.', 'bce' ),
		)
	),
	'description_transform' => array(
		'type'    => 'select',
		'ui'      => array(
			'title'   => __( 'Description text transform', 'bce' ),
			'tooltip' => __( 'Select description text  transform.', 'bce' ),
		),
		'options' => array(
			'choices' => array(
				array( 'value' => 'none', 'label' => __( 'None', 'bce' ) ),
				array( 'value' => 'uppercase', 'label' => __( 'Uppercase', 'bce' ) ),
				array( 'value' => 'capitalize', 'label' => __( 'Capitalize', 'bce' ) ),
				array( 'value' => 'lowercase', 'label' => __( 'Lowercase', 'bce' ) ),
			)
		)
	),
	'text_button'           => array(
		'type' => 'text',
		'ui'   => array(
			'title'   => __( 'Text Button', 'bce' ),
			'tooltip' => __( 'Enter text button.', 'bce' ),
		)
	),
	'bg_options'            => array(
		'type' => 'color',
		'ui'   => array(
			'title' => __( 'Background Color', 'bce' )
		)
	),

	/* General params */
	'fade'                  => array(
		'type' => 'toggle',
		'ui'   => array(
			'title'   => __( 'Enable Fade Effect', 'bce' ),
			'tooltip' => __( 'Activating will make this element fade into view when the user scrolls to it for the first time.', 'bce' ),
		)
	),
	'fade_animation'        => array(
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
	'fade_duration'         => array(
		'type'      => 'text',
		'ui'        => array(
			'title'   => __( 'Duration', 'bce' ),
			'tooltip' => __( 'Determines how long the fade effect will be.', 'bce' ),
		),
		'condition' => array( 'fade' => true )
	),
	'common'                => array( 'padding', 'margin', 'border', 'text_align' ),
);
