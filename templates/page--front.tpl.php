<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<img src="/sites/all/themes/bootstrap_cul7/img/layout/cul-logo-white.gif" alt="Cornell University Library" class="print-logo">

<div class="cornell-brand">
  <div class="container">
    <div class="row">
      <div class="navbar-header visible-xs">
        <a class="navbar-brand visible-xs" href="http://www.cornell.edu"><img src="/sites/all/themes/bootstrap_cul7/img/layout/cornell-red.gif" alt="Cornell University"></a>
      </div>
      <div class="cornell-logo">
        <a href="http://www.cornell.edu"><img src="/sites/all/themes/bootstrap_cul7/img/layout/CU-Insignia-White-120.png" alt="Cornell University" class="insignia hidden-xs"></a>
        <div class="library-brand">
          <a href="/">Cornell University Library</a>
        </div>
      </div>
      <div class="nav-global hidden-xs">
        <?php print render($page['header']); ?>
      </div>
    </div>
  </div>
</div>

<div class="navbar">
  <div class="container">
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

<div class="hero" id="hero">
  <div class="container">
    <div class="jumbotron" id="maincontent">

      <div class="row">
        <div class="home-search">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="active" role="presentation"><a aria-controls="all" data-toggle="tab" href="#all" role="tab">Search</a></li>
            <li role="presentation"><a aria-controls="website" data-toggle="tab" href="#website" role="tab">Library Website</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="all" role="tabpanel">
              <?php print render($page['home-search-all']); ?>
            </div>
            <div class="tab-pane" id="website" role="tabpanel">
              <?php print render($page['home-search-website']); ?>
            </div>
          </div>
        </div><!-- /home-search -->
      </div><!-- /row -->

    </div><!-- /jumbotron -->
    <div class="spotlight-caption">
      <div class="spotlight">
        <?php print render($page['home-spotlight']); ?>
      </div> 
      <div class="caption-link hidden-xs"> <?php print render($page['home-aboutimage']); ?>
</div>
    </div>
  </div><!-- /container -->
</div><!-- /hero -->

<div class="main-content">
  <div class="container">
    <?php print render($page['highlighted']); ?>
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php if(drupal_is_front_page()) {
      unset($page['content']['system_main']['default_message']);
    }?>

    <div class="row">
      <div class="feature-wrapper">
        <div class="feature">
          <?php print render($page['home-feature1']); ?>
        </div>
      </div>
      <div class="feature-wrapper">
        <div class="feature">
          <?php print render($page['home-feature2']); ?>
        </div>
      </div>
      <div class="feature-wrapper">
        <div class="feature">
          <?php print render($page['home-feature3']); ?>
        </div>
      </div>
      <div class="feature-wrapper">
        <div class="feature">
          <?php print render($page['home-feature4']); ?>
        </div>
      </div>

    </div><!-- /row -->

  </div> <!-- /container -->
</div><!-- /main-content -->

<div class="secondary-content">
  <div class="container">
    <div class="row">
      <div class="secondary-wrapper">
        <div class="secondary-feature">
          <?php print render($page['home-secondary1']); ?>
        </div>
      </div>
      <div class="secondary-wrapper">
        <div class="secondary-feature">
          <?php print render($page['home-secondary2']); ?>
        </div>
      </div>
      <div class="secondary-wrapper">
        <div class="secondary-feature">
          <?php print render($page['home-secondary3']); ?>
        </div>
      </div>
    </div>
  </div>
</div>

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
        <a class="facebook-button" href="http://www.facebook.com/cornelluniversitylibrary" title="Find us on Facebook"><i class="fa fa-facebook-square" alt="Find us on Facebook"><span class="sr-only">Facebook</span></i></a> 
        <a class="twitter-button" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fwww.library.cornell.edu%2Findex&amp;region=follow_link&amp;screen_name=Cornell_Library&amp;tw_p=followbutton&amp;variant=2.0" title="Follow us on Twitter"><i class="fa fa-twitter-square" alt="Follow us on Twitter"><span class="sr-only">Twitter</span></i></a>
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>

<script type="text/javascript">
  document.getElementById('q').focus()
</script>

