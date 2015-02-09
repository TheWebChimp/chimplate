jQuery(document).ready(function($) {

	// Stuff to do as soon as the DOM is ready;
	$('input').iCheck({
		checkboxClass: 'icheckbox_flat',
		radioClass: 'iradio_flat'
	});

	// Custom Selects
	if($('[data-toggle="select"]').length) {
		$('[data-toggle="select"]').select2({ minimumResultsForSearch: 99 });
	}

});