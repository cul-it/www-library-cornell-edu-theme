(function ($) {
	$(document).ready(function() {
		$('#q').click(function() { console.log('clicked!'); });
		$('#q').autocomplete({
			source: 'autocomplete.php',
        	minLength: 2,
        	select: function(event, ui) {
        		console.log('got response');
          		var url = ui.item.id;
          		if (url != '#') {
          			location.href = url;
          		}
        	}
     	});
	});
})(jQuery);