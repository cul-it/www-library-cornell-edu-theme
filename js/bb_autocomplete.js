// Add autocomplete for the main site search box — ony for Best Bets results
(function ($) {
  $(document).ready(function() {

    // $('#q').autocomplete({
    //   source: 'https://bestbets.library.cornell.edu/match/' + $('#q').val(),
    //   minLength: 2,
    //   select: function(event, ui) {
    //     var url = ui.item.url;
    //     if (url != '#') {
    //       location.href = url;
    //     }
    //   }
    // })
    $('#q').autocomplete({
      source: function(request, response) {
        $.ajax({
          url: 'https://bestbets.library.cornell.edu/match/' + $('#q').val(),
          success: function(data) {
            var transformed = $.map(data, function(el) {
              return {
                label: el.name,
                id: el.url
              };
            });
            response(transformed);
          },
          error: function() {
            response([]);
          }
        });
      },
      minLength: 2,
      select: function(event, ui) {
        var url = ui.item.id;
        if (url != '#') {
          location.href = url;
        }
      }
    })
    
    // This next section is just to add the little external link icon (the <i> class) 
    // after the label in the results list!
    // It can be completely removed if all you need is basic autocomplete
    // .data('autocomplete')._renderItem = function(ul, item) {
    //   return $('<li>')
    //     .data('item.autocomplete', item)
    //     .append('<a>' + item.name + '&nbsp;&nbsp;<i class="fa fa-external-link"></i>')
    //     .append()
    //     .appendTo(ul);
    // }

  });
})(jQuery);
