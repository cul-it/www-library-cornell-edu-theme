// Insert a LibCal hours widget into a unit library page
(function ($) {
  $(document).ready(function() {
    var libraryId = jQuery("#s-lc-whw2818").attr('data-hours');
    var week2818 = new jQuery.LibCalWeeklyGrid( jQuery("#s-lc-whw2818"), { iid: 973, lid: libraryId,  weeks: 26 }); 
  });
})(jQuery);
