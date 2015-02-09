<?php
	/**
	 * ajax.inc.php
	 * Add your AJAX actions here
	 */

	# Sample AJAX action ------------------------------------------------------
	function ajax_test() {
		echo '<pre>'.print_r($_REQUEST, true).'</pre>';
		exit;
	}
	$site->addAjaxAction('test', 'ajax_test');

?>