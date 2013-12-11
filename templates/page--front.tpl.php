<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<div class="cornell-brand hidden-xs">
  <div class="container">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo">
          <img src="/sites/all/themes/bootstrap_cul7/img/layout/cul-logo-white.gif">
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
        <a href="http://www.cornell.edu"><img src="/sites/all/themes/bootstrap_cul7/img/layout/insignia.png" alt=""></a>
      </div>
      <a class="navbar-brand visible-xs" href="#">Cornell University Library</a>
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

<div class="hero" id="maincontent">
  <div class="container">
    <div class="jumbotron jumbotron-single">

      <div class="row">
        <div class="search-form search-form-single"><!-- TODO: consolidate into one class after selecting search box style; remove search-form-single class-->
          <h1>Search</h1>
          <form class="form-inline clearfix" role="form" action="http://jrc88-dev.library.cornell.edu:3000" method="get">
            <div class="form-group search-box">
              <label class="sr-only" for="exampleInputEmail2">Search everything</label>
              <input type="text" class="form-control" id="q" name="q" placeholder="Books, articles, databases, websites and more">
            </div>
            <div class="search-button">
              <button type="submit" class="btn btn-search">Search</button>
            </div>
          </form>
          <div class="help-links">
            <div class="search-options">
              <!-- <h2>Other search options</h4> -->
              <ul>
                <li><a href="http://culsearchdev.library.cornell.edu"><i class="fa fa-external-link"></i> Catalog</a></li>
                <li><a href="http://cornell.summon.serialssolutions.com/search?s.cmd=addFacetValueFilters(ContentType,Journal%20Article)"><i class="fa fa-external-link"></i> Articles</a></li>
                <li><a href="http://erms.library.cornell.edu/search~S4"><i class="fa fa-external-link"></i> Database Names</a></li>
                <li><a href="http://erms.library.cornell.edu/"><i class="fa fa-external-link"></i> E-Journal Titles</a></li>
              </ul>
            </div>
            <a href="/help/catalog" class="search-help">Help</a>
          </div>
        </div><!-- /search-form -->
      </div><!-- /row -->

    </div><!-- /jumbotron -->
    <div class="hero-caption">
      <div class="caption-label">Spotlight</div>
      <h4 class="caption-title">New student reading project</h4>
      <div class="caption-link"><a href="http://blogs.cornell.edu/reading2013/">Learn more &raquo;</a></div>
      <div class="image-link"><a href="#">About this image</a></div>
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
        <div class="secondary-feature news">
          <?php print render($page['home-secondary1']); ?>
        </div>
      </div>
      <div class="secondary-wrapper">
        <div class="secondary-feature libescope clearfix">
          <?php print render($page['home-secondary2']); ?>
        </div>
      </div>
      <div class="secondary-wrapper">
        <div class="secondary-feature events">
          <?php print render($page['home-secondary3']); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="footer-primary">
        <?php print render($page['footer-primary']); ?>
      </div>
      <div class="footer-secondary">
        <?php print render($page['footer-secondary']); ?>
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>
