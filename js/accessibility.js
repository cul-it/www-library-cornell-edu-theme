// Add captions to liaison table
(function ($) {
  $(document).ready(function() {
    $(".view-liaisons-sandbox table").prepend( "<caption class=\"sr-only\">List of library liaisons with contact information</caption>");
  });
})(jQuery);