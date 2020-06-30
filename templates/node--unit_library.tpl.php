<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<script src="//api3.libcal.com/js/hours_grid.js?002"></script>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
    ?>

    <div class="row">
      <div class="col-sm-8">
        <?php print render($content['body']); ?>

        <h2>Hours</h2>
        <?php
          // Figure out the LibCal library code for whichever library this is
          $libcal_codes = array(
            'Africana' => 3319,
            'Fine Arts' => 3321,
            'Hotel' => 3322,
            'ILR' => 3323,
            'Kroch' => 3324,
            'Rare' => 3325,
            'Law' => 3476,
            'GENEVA' => 3437,
            'ANNEX' => 3326,
            'JGSM' => 3340,
            'MANNLIB' => 1707,
            'MATH' => 3327,
            'Music' => 3328,
            'OLIN' => 2818,
            'Ornithology' => 3329,
            'Uris' => 2830,
            'Vet' => 3331
          );

          $location_hours = $node->field_hours_id['und'][0]['value'];
          $closed_button = '<span class="label label-danger library-closed">Closed</span>';
          $pickup = '<span>'.l('Request/pickup service available', '/library-return-campus-faq').'</span>';
          switch ($location_hours) {
            case 'ANNEX':
              // Request/Pickup Service Available
              print implode(' ', [$closed_button, $pickup]);
              $library_id = $libcal_codes[$location_hours];
              print '<div id="s-lc-whw2818" data-hours="' . $library_id . '"></div>';
              break;

            case 'MANNLIB':
              print implode(' ', [$closed_button, $pickup]);
              $library_id = $libcal_codes[$location_hours];
              print '<div id="s-lc-whw2818" data-hours="' . $library_id . '"></div>';
              break;

            case 'Uris':
              print implode(' ', [$closed_button, $pickup]);
              $library_id = $libcal_codes[$location_hours];
              print '<div id="s-lc-whw2818" data-hours="' . $library_id . '"></div>';
              break;

            case 'weill':
              // We don't track hours for Weill
              print '<div><a href="http://library.med.cornell.edu/About/hours.html">Library hours available on the Weill Library website</a></div>';
              break;

            case 'weill-archives';
              print '<div><a href="https://library.weill.cornell.edu/archives">Library hours available on the Weill Archives website</a></div>';
              break;

            default:
              print $closed_button;
              // $library_id = $libcal_codes[$location_hours];
              // print '<div id="s-lc-whw2818" data-hours="' . $library_id . '"></div>';
              break;
          }

          // We don't track hours for Weill
          // if ($location_hours == 'weill') {
          //   print '<div><a href="http://library.med.cornell.edu/About/hours.html">Library hours available on the Weill Library website</a></div>';
          // }
          // elseif ($location_hours == 'weill-archives') {
          //   print '<div><a href="https://library.weill.cornell.edu/archives">Library hours available on the Weill Archives website</a></div>';
          // }
          // elseif ($location_hours == 'PhysSci') {
          //   print '<div><p>24/7 quiet study space only</p></div>';
          // }
          // elseif ($location_hours == 'Engineering') {
          //   print '<div><p>24/7 study space and computing only</p></div>';
          // }
          // else {
          //   $library_id = $libcal_codes[$location_hours];
          //   print '<div id="s-lc-whw2818" data-hours="' . $library_id . '"></div>';
          // }

        ?>
      </div>
      <div class="col-sm-4">
        <div class="well highlight-box">
          <h3>Website <i class="fa fa-external-link"></i></h3>
          <?php print render($content['group_contact']['field_website']); ?>
          <h3>Contact</h3>
          <h4>Reference</h4>
          <?php print render($content['group_contact']['field_ref_email']); ?>
          <?php print render($content['group_contact']['field_ref_phone']); ?>
          <h4>Circulation</h4>
          <?php print render($content['group_contact']['field_circ_email']); ?>
          <?php print render($content['group_contact']['field_circ_phone']); ?>
          <h4>Address</h4>
          <?php if ($location['name']) : ?>
            <?php print $location['name'] ?><br>
          <?php endif; ?>
          <?php if ($location['street']) : ?>
            <?php print $location['street'] ?><br>
          <?php endif; ?>
          <?php if ($location['additional']) : ?>
            <?php print $location['additional'] ?><br>
          <?php endif; ?>
          <?php if ($location['city']) : ?>
            <?php print $location['city'] ?>,
          <?php endif; ?>
          <?php if ($location['province']) : ?>
            <?php print $location['province'] ?>
          <?php endif; ?>
          <?php if ($location['postal_code']) : ?>
            <?php print $location['postal_code'] ?>
          <?php endif; ?>
        </div>
        <div class="unit-map">
          <?php print render($content['field_map']); ?>
        </div>
        <p class="text-center"><small><a href="https://www.cornell.edu/about/maps/index.cfm?overlays=Library">View map of Cornell libraries <i class="fa fa-arrow-right"></i></a></small></p>
      </div>

    </div>

    <?php print render($content['links']); ?>
    <?php print render($content['comments']); ?>
  </div>
</div>
