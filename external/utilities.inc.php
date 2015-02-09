<?php

	/**
	 * Pretty-print an array or object
	 * @param  mixed $a Array or object
	 */
	function print_a( $a ) {
		print( '<pre>' );
		print_r( $a );
		print( '</pre>' );
	}

	/**
	 * Convert a shorthand byte value from a PHP configuration directive to an integer value
	 * @param    string   $value
	 * @return   int
	 */
	function convert_bytes( $value ) {
		if ( is_numeric( $value ) ) {
			return $value;
		} else {
			$value_length = strlen( $value );
			$qty = substr( $value, 0, $value_length - 1 );
			$unit = strtolower( substr( $value, $value_length - 1 ) );
			switch ( $unit ) {
				case 'k':
					$qty *= 1024;
					break;
				case 'm':
					$qty *= 1048576;
					break;
				case 'g':
					$qty *= 1073741824;
					break;
			}
			return $qty;
		}
	}

	/**
	 * Get an item from an array, or a default value if it's not set
	 * @param  array $array    Array
	 * @param  mixed $key      Key or index, depending on the array
	 * @param  mixed $default  A default value to return if the item it's not in the array
	 * @return mixed           The requested item (if present) or the default value
	 */
	function get_item($array, $key, $default = '') {
		return isset( $array[$key] ) ? $array[$key] : $default;
	}

	/**
	 * Mark an option as selected by evaluating the variable
	 * @param  mixed  $var   Variable expected value
	 * @param  mixed  $val   Variable actual value
	 * @param  string $attr  Attribute to use (selected, checked, etc)
	 * @param  boolean $echo Whether to echo the result or not
	 * @return string        Selected attribute text or an empty text
	 */
	function option_selected($var, $val, $attr = "selected", $echo = true) {
		$ret = ($var == $val) ? "{$attr}=\"{$attr}\"" : '';
		if ($echo) {
			echo $ret;
		}
		return $ret;
	}

?>