<?php

/**
 * @file template.php
 */

function bootstrap_subtheme_menu_link(array $variables) {
  unset($element['#localized_options']['attributes']['data-hover'] = 'dropdown';);
  unset($element['#localized_options']['attributes']['data-target'] = '#';);
}

?>