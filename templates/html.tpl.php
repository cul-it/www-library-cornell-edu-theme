<!DOCTYPE html>
<html lang="en">
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php print $head_title; ?></title>

  <?php print $styles; ?>
  <link href="/sites/all/themes/bootstrap_cul7/css/style.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="/sites/all/themes/bootstrap_cul7/js/html5shiv.js"></script>
    <script src="/sites/all/themes/bootstrap_cul7/js/respond.min.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
  
</head>
<body class="<?php print $classes; ?>" id="top" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
