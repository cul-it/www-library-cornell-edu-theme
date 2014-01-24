// (function ($) {
// 	$(document).ready(function() {

// 		$('#q').autocomplete({
// 			source: Drupal.settings.basePath + 'sites/all/themes/' + Drupal.settings.ajaxPageState.theme + '/autocomplete.php',
//       minLength: 2,
//       select: function(event, ui) {
//         var url = ui.item.id;
//         if (url != '#') {
//           location.href = url;
//         }
//       }
//     })
//     .data('ui-autocomplete')._renderItem = function(ul, item) {
//       return $('<li>')
//         .data('ui-autocomplete-item', item)
//         .append('<a>' + item.label + '</a><i class="fa fa-external-link"></i>')
// //        .append()
//         .appendTo(ul);

//     }

// 	});
// })(jQuery);

(function ($) {
  $(document).ready(function() {
    $('#q').autocomplete({
      source: Drupal.settings.basePath + 'sites/all/themes/' + Drupal.settings.ajaxPageState.theme + '/autocomplete.php',
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