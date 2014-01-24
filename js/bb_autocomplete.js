// Add autocomplete for the main site search box — ony for Best Bets results
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
    })
    // This next section is just to add the little external link icon (the <i> class) 
    // after the label in the results list!
    // It can be completely removed if all you need is basic autocomplete
    .data('autocomplete')._renderItem = function(ul, item) {
      return $('<li>')
        .data('item.autocomplete', item)
        .append('<a>' + item.label + '&nbsp;&nbsp;<i class="fa fa-external-link"></i>')
        .append()
        .appendTo(ul);
    }

  });
})(jQuery);
