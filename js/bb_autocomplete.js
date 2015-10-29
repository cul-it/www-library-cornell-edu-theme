// Add autocomplete for the main site search box — ony for Best Bets results
(function ($) {
  $(document).ready(function() {

    $('#q').autocomplete({
      source: 'https://bestbets.library.cornell.edu/match/' + $('#q').val(),
      minLength: 2,
      select: function(event, ui) {
        var url = ui.item.url;
        if (url != '#') {
          location.href = url;
        }
      }
    })


  });
})(jQuery);
