<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<img src="/sites/all/themes/bootstrap_cul7/img/layout/cul-logo-white.gif" alt="Cornell University Library" class="print-logo">

<div class="cornell-brand">
  <div class="container">
    <div class="row">
      <div class="navbar-header visible-xs">
        <a class="navbar-brand visible-xs" href="http://www.cornell.edu"><img src="/sites/all/themes/bootstrap_cul7/img/layout/cornell-red.gif" alt="Cornell University"></a>
        <button type="button" class="search-toggle" data-toggle="collapse" data-target=".search-collapse">
          <i class="fa fa-search"></i><span class="sr-only">Search</span>
        </button>
      </div>
      <div class="cornell-logo">
        <a href="http://www.cornell.edu"><img src="/sites/all/themes/bootstrap_cul7/img/layout/CU-Insignia-White-120.png" alt="Cornell University" class="insignia hidden-xs"></a>
        <div class="library-brand">
          <a href="/">Cornell University Library</a>
        </div>
      </div>
      <div class="nav-global">
        <div class="search-collapse">
          <?php print render($page['header']); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="navbar">
  <div class="container">
    <!-- <div class="visible-xs mobile-search">
      
        <?php print render($page['mobile-search']); ?>
      </div>
    </div> -->
    <div class="nav navbar-nav">
      <?php print render($page['navigation']); ?>
    </div>
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
      <div class="row primary-wrapper" id="maincontent">
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
    <div class="libraries-list">
      <div class="row">
        <?php print render($page['footer-libraries']); ?>
      </div>
    </div>

    <div class="row">
      <a data-toggle="collapse" data-target=".footer-collapse" class="btn btn-libraries footer-toggle">
        Menu <i class="fa fa-chevron-right"></i>
      </a>
      <div class="footer-collapse collapse">
        <div class="footer-links">
          <?php print render($page['footer-links1']); ?>
        </div>
        <div class="footer-links">
          <?php print render($page['footer-links2']); ?>
        </div>
        <div class="footer-links">
          <?php print render($page['footer-links3']); ?>
        </div>
        <div class="footer-links">
          <?php print render($page['footer-links4']); ?>
        </div>
      </div>

      <div class="footer-feedback">
        <?php print render($page['footer-feedback']); ?>
      </div>
    </div>
    <div class="row footer-copyright">
      <div class="copyright">
        <?php print render($page['footer-copyright']); ?>
      </div>
      <div class="social-links">
        <a class="facebook-button" href="http://www.facebook.com/cornelluniversitylibrary" title="Find us on Facebook"><i class="fa fa-facebook-square" alt="Find us on Facebook"></i><span class="sr-only">Facebook>/span></a> 
        <a class="twitter-button" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fwww.library.cornell.edu%2Findex&amp;region=follow_link&amp;screen_name=Cornell_Library&amp;tw_p=followbutton&amp;variant=2.0" title="Follow us on Twitter"><i class="fa fa-twitter-square" alt="Follow us on Twitter"></i><span class="sr-only">Twitter</span></a>
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>