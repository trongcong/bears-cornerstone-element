<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 10/1/2017 - 18:27
 * Project Name: bears-cornerstone-element
 *
 * Element Definition: "BCE Example Element"
 */

class BCE_Custom_Block_Element {
	public function ui() {
		return array(
			'title'      => __( 'BCE Custom Block', 'bce' ),
			'icon_group' => 'bce-element',
		);
	}
}
