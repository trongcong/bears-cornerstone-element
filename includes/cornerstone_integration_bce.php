<?php

class Cornerstone_Integration_BCE {
	private $extension_path, $extension_url;

	/**
	 * bce_extension_admin_enqueue_scripts
	 */
	public function bce_extension_admin_enqueue_scripts() {
		wp_enqueue_style( 'bce_cornerstone-styles', $GLOBALS['bce_url'] . 'public/css/bce.css', array(), '0.1.0' );
	}

	/**
	 * bce_extension_register_elements
	 */
	public function bce_extension_register_elements() {
		/* bce heading */
		cornerstone_register_element( 'BCE_Example_Element', 'bce-example-element', $this->extension_path . 'elements/bce-example-element' );
		cornerstone_register_element( 'BCE_Heading_Element', 'bce-heading-element', $this->extension_path . 'elements/bce-heading-element' );
		// cornerstone_register_element( 'BCE_Custom_Block_Element', 'bce-custom-block-element', $this->extension_path . 'elements/bce-custom-block-element' );
		// cornerstone_register_element( 'BCE_Team_Element', 'bce-team-element', $this->extension_path . 'elements/bce-team-element' );
	}

	/**
	 * bce_extension_icon_map
	 */
	public function bce_extension_icon_map() {
		$icon_map['bce-element'] = $GLOBALS['bce_url'] . 'public/images/Bearsthemes-logo.svg';

		return $icon_map;
	}

	/**
	 * @external
	 */
	public function _init() {
		$this->extension_path = $GLOBALS['bce_dir'] . 'includes/';
		$this->extension_url  = $GLOBALS['bce_url'] . 'includes/';
		//echo $GLOBALS['bce_url'];
		$this->add_filters();
		$this->add_actions();
	}

	/**
	 * @internal
	 */
	private function add_filters() {
		add_filter( 'cornerstone_icon_map', array( $this, 'bce_extension_icon_map' ) );
	}

	/**
	 * @internal
	 */
	private function add_actions() {
		//		add_action( 'wp_enqueue_scripts_clean', array( $this, 'bce_extension_admin_enqueue_scripts' ), 100 );
		add_action( 'wp_enqueue_scripts', array( $this, 'bce_extension_admin_enqueue_scripts' ) );
		add_action( 'cornerstone_register_elements', array( $this, 'bce_extension_register_elements' ) );
	}
}
