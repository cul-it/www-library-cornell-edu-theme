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
      <button type="button" class="search-toggle" data-toggle="collapse" data-target=".search-collapse">
        <i class="fa fa-search"></i>
      </button>
      <!-- <div class="mobile-insignia visible-xs">
        <a href="http://www.cornell.edu"><img src="/sites/all/themes/bootstrap_cul7/img/layout/insignia.png" alt="Cornell University"></a>
      </div> -->
      <a class="navbar-brand visible-xs" href="/">Cornell University Library</a>
    </div>
    <div class="visible-xs mobile-search">
      <div class="search-collapse collapse">
        <form class="form-inline clearfix" role="form" action="http://search.library.cornell.edu/" method="get">
          <div class="form-group">
            <label class="sr-only" for="q">Search</label>
            <input type="text" class="form-control input-sm search-box" id="q" name="q" placeholder="Search everything">
          </div>
          <button type="submit" class="btn btn-search-icon btn-sm"><i class="fa fa-search fa-inverse"></i></button>
        </form>
      </div>
    </div>
    <div class="navbar-collapse collapse">
      <div class="nav navbar-nav">
        <?php print render($page['navigation']); ?>
      </div>
    </div><!--/.navbar-collapse -->
  </div>
</div>

<?php
  $announcement  = render($page['announcement']);
?>

<?php if ($announcement): ?>
  <div class="announcement">
    <div class="container">
      <?php print render($announcement); ?>
    </div>
  </div>
<?php endif; ?>

<div class="main-content">
  <div class="container">
    <div class="row">
      <div class="breadcrumb-wrapper"><!--TO DO: SEMANTIC-->
        <?php print render($breadcrumb); ?>
      </div>
    </div>
    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar  = render($page['sidebar']);
      $news_sidebar  = render($page['news-sidebar']);
    ?>
    <?php // if there is a sidebar, then create two column layout ?>
    <?php if ($sidebar): ?>
    <div class="row primary-wrapper">
      <div class="main-text" id="maincontent">
        <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php if ($title): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div><!--/main-text-->

      <div class="sidebar">
        <?php print render($page['sidebar']); ?>
        <?php if ($news_sidebar): ?>
          <div class="callout secondary-feature">
            <?php print render($page['news-sidebar']); ?>
          </div>
        <?php endif; ?>
      </div><!--/sidebar-->

    </div>

    <?php else: ?>
      <div class="row primary-wrapper">
        <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php if ($title): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($page['content']); ?>

    </div>

  <?php endif; ?>

  </div> <!-- /container -->
</div><!-- /main-content -->

<footer>
  <div class="container">
    <div class="row">
      <div class="footer-primary">
        <?php print render($page['footer-primary']); ?>
      </div>
      <div class="footer-secondary">
        <div class="social-links">
          <a class="facebook-button" href="http://www.facebook.com/cornelluniversitylibrary" title="Find us on Facebook"><i class="fa fa-facebook-square" alt="Find us on Facebook"></i></a> 
          <a class="twitter-button" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fwww.library.cornell.edu%2Findex&amp;region=follow_link&amp;screen_name=Cornell_Library&amp;tw_p=followbutton&amp;variant=2.0" title="Follow us on Twitter"><i class="fa fa-twitter-square" alt="Follow us on Twitter"></i></a>
        </div>
        <?php print render($page['footer-secondary']); ?>
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>