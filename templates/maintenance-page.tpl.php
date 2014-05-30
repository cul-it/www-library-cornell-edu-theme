<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <link href="/sites/all/themes/bootstrap_cul7/css/style.css" rel="stylesheet">
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
  

  <div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<div class="cornell-brand hidden-xs">
  <div class="container">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo">
          <img src="/sites/all/themes/bootstrap_cul7/img/layout/cul-logo-white.gif" alt="Cornell University Library">
          <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
          <div class="unit-signature-links">
            <a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a>
            <a id="unit-link" href="/">Cornell University Library</a>
          </div>
        </div>
      </div>
      <div class="nav-global">
        <?php print render($page['header']); ?>
      </div>
    </div>
  </div>
</div>

<div class="navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="mobile-insignia visible-xs">
        <a href="http://www.cornell.edu"><img src="/sites/all/themes/bootstrap_cul7/img/layout/insignia.png" alt="Cornell University"></a>
      </div>
      <a class="navbar-brand visible-xs" href="/">Cornell University Library</a>
    </div>
    <div class="navbar-collapse collapse">
      <div class="visible-xs mobile-search">
        <form class="form-inline clearfix" role="form" action="http://search.library.cornell.edu/" method="get">
          <div class="form-group">
            <label class="sr-only" for="q">Search</label>
            <input type="text" class="form-control input-sm search-box" id="q" name="q" placeholder="Search everything">
          </div>
          <button type="submit" class="btn btn-search-icon btn-sm"><i class="fa fa-search fa-inverse"></i></button>
        </form>
      </div>
      <div class="nav navbar-nav">
        <?php print render($page['navigation']); ?>
      </div>
    </div><!--/.navbar-collapse -->
  </div>
</div>


<div class="main-content">
  <div class="container">
    <div class="well">
      <h2>Site under maintenance</h2>
      <p>We're sorry, the Cornell University Library website is currently under maintenance. Please check back again soon!</p>
    </div>

  </div> <!-- /container -->
</div><!-- /main-content -->


<?php print render($page['bottom']); ?>


</body>
</html>
