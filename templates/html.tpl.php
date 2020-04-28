<!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <title><?php print $head_title; ?></title>

  <link rel="apple-touch-icon" href="/sites/all/themes/bootstrap_cul7/img/layout/apple-touch-icon.png">
  <link rel="apple-touch-icon" href="/sites/all/themes/bootstrap_cul7/img/layout/touch-icon-iphone.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/sites/all/themes/bootstrap_cul7/img/layout/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/sites/all/themes/bootstrap_cul7/img/layout/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/bootstrap_cul7/img/layout/touch-icon-ipad-retina.png">
  <?php print $styles; ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="/sites/all/themes/bootstrap_cul7/js/html5shiv.js"></script>
    <script src="/sites/all/themes/bootstrap_cul7/js/respond.min.js"></script>
  <![endif]-->
  <?php print $scripts; ?>

  <!-- Emergency Banner -->
  <script src="//embanner.univcomm.cornell.edu/OWC-emergency-banner.js" type="text/javascript" async></script>
</head>
<body class="<?php print $classes; ?>" id="top" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
