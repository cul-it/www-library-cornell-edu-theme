/**
 * cul_menu_fix.js - code provided here
 *  https://drupal.org/comment/7751497#comment-7751497
 *
 *  1- Configure your main links to be "Expanded" in Drupal's admin panel
 *  2- Without modifying the Bootstrap base theme, create a custom.js in your sub-theme folder and use the following code :
 */
jQuery(document).ready(function () {
  DropdownToggle();
});
function DropdownToggle() {
jQuery('.dropdown-toggle').removeAttr("data-toggle");
}
