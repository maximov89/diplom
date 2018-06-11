jQuery(document).ready(function($) {
	$('#remove-answer').on('click', function() {
		$("#field-answer").val('');
	});
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
});