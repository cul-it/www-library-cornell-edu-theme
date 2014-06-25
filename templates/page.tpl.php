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
      <a class="navbar-brand visible-xs" href="/"><img src="/sites/all/themes/bootstrap_cul7/img/layout/cul-mobile.png" alt="Cornell University Library"></a>
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
    <div class="libraries-list">
      <a data-toggle="collapse" data-target=".libraries-collapse" class="btn btn-libraries">
        Libraries <i class="fa fa-chevron-right"></i>
      </a>
      <!--<#? php print render($page['footer-libraries']); ?>-->
      <div class="libraries-collapse collapse">
        <div class="row">
          <div class="col-sm-4">
            <ul>
              <li><a href="http://africana.library.cornell.edu">Africana Library</a></li>
              <li><a href="http://engineering.library.cornell.edu">Engineering Library</a></li>
              <li><a href="http://finearts.library.cornell.edu">Fine Arts Library</a></li>
              <li><a href="http://leelibrary.cornell.edu">Geneva Experiment Station</a></li>
              <li><a href="http://www.hotelschool.cornell.edu/research/library/">Hotel Library</a></li>
              <li><a href="http://www.ilr.cornell.edu/library">Industrial and Labor Relations Library</a></li>
              <li><a href="http://asia.library.cornell.edu/ac/">Kroch Library, Division of Asia Collections</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="http://rmc.library.cornell.edu">Kroch Library, Division of Rare &amp; Manuscript Collections</a></li>
              <li><a href="http://www.lawschool.cornell.edu/library/index2.cfm">Law Library</a></li>
              <li><a href="http://annex.library.cornell.edu">Library Annex</a></li>
              <li><a href="http://johnson.library.cornell.edu">Management Library</a></li>
              <li><a href="http://mannlib.cornell.edu">Mann Library</a></li>
              <li><a href="http://mathematics.library.cornell.edu">Mathematics Library</a></li>
              <li><a href="http://www.med.cornell.edu/archives/">Medical Center Archives</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="http://library.med.cornell.edu/">Medical Library</a></li>
              <li><a href="http://music.library.cornell.edu">Music Library</a></li>
              <li><a href="http://olinuris.library.cornell.edu">Olin Library</a></li>
              <li><a href="http://www.birds.cornell.edu/Adelson">Ornithology Library</a></li>
              <li><a href="http://physicalsciences.library.cornell.edu">Physical Sciences Library</a></li>
              <li><a href="http://olinuris.library.cornell.edu">Uris Library</a></li>
              <li><a href="http://www.vet.cornell.edu/library/">Veterinary Library</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
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
      <div class="footer-feedback">
        <?php print render($page['footer-feedback']); ?>
      </div>
    </div>
    <?php print render($page['footer-copyright']); ?>
    <!-- <div class="row footer-copyright">
      <div class="col-sm-6">
        Copyright
      </div>
      <div class="col-sm-6 text-right">
        social links
      </div>
    </div> -->
  </div>
</footer>

<?php print render($page['bottom']); ?>