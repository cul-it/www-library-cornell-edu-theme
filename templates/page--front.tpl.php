<?php
/**
 * @file
 * Returns the HTML for Drupal front page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class="cornell-brand hidden-xs">
  <div class="container">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo">
          <img src="/sites/all/themes/bootstrap_cul7/img/layout/cul-logo-white.gif">
          <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
          <div class="unit-signature-links">
            <a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a>
            <a id="unit-link" href="index.html">Cornell University Library</a>
          </div>
        </div>
      </div>
      <div class="nav-global">
        <ul>
          <li><a href="#">My account</a></li>
          <li><a href="#">Help</a></li>
        </ul>
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
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="about.html#">About us</a></li>
        <li><a href="#">Libraries</a></li>
        <li><a href="#">Hours and Maps</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Research</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Ask a Librarian</a></li>
        <li class="visible-xs global-link"><a href="#">My Account</a></li>
        <li class="visible-xs global-link"><a href="#">Help</a></li>
      </ul> -->
    </div><!--/.navbar-collapse -->
  </div>
</div>

<div class="hero">
  <div class="container">
    <div class="jumbotron jumbotron-single">

      <div class="row">
        <div class="search-form search-form-single"><!-- TODO: consolidate into one class after selecting search box style-->
          <h3>Search</h3>
          <form class="form-inline clearfix" role="form" action="http://nac26-dev.library.cornell.edu:3000" method="get">
            <div class="form-group search-box">
              <label class="sr-only" for="exampleInputEmail2">Search everything</label>
              <input type="text" class="form-control" id="q" name="q" placeholder="Books, articles, databases, websites and more">
            </div>
            <div class="search-button">
              <button type="submit" class="btn btn-search">Search</button>
            </div>
          </form>
          <div class="help-links dropdown">
            <!-- Link or button to toggle dropdown -->
            <a id="dropdownMenu1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Other search options</a>
            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="http://culsearchdev.library.cornell.edu">Catalog</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="http://cornell.summon.serialssolutions.com/search?s.cmd=addFacetValueFilters(ContentType,Journal%20Article)">Articles</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="http://erms.library.cornell.edu/search~S4">Database Names</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="http://erms.library.cornell.edu/">E-Journal Titles</a></li>

            </ul>
            | <a href="#">Search help</a>
          </div>
        </div><!-- /search-form -->
      </div><!-- /row -->

    </div><!-- /jumbotron -->
    <div class="hero-caption">
      <div class="caption-label">Spotlight</div>
      <h4 class="caption-title">New student reading project</h4>
      <div class="caption-link"><a href="http://blogs.cornell.edu/reading2013/">Learn more &raquo;</a></div>
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
      <div class="col-lg-3 col-sm-3"><!-- TODO: SEMANTIC -->
        <div class="feature">
          <h2>Courses</h2>
          <div class="courses-form">
            <form class="form-inline clearfix" role="form" action="http://nac26-dev.library.cornell.edu:3000" method="get">
              <div class="form-group">
                <label class="sr-only" for="q">Search courses</label>
                <input type="text" class="form-control input-sm search-box" id="q" name="q" placeholder="Search courses">
              </div>
              <button type="submit" class="btn btn-sm">Search</button>
            </form>
            <span class="help-block">Enter course name, number, or professor:<br>
              e.g., Shakespeare<br>
              e.g., ENGL 1105<br>
              e.g., Floyd
            </span>
          </div>
          <ul class="nav icons-ul nav-section">
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Blackboard</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Library Guides</a></li>
            </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-3">
        <div class="feature">
          <h2>Research</h2>
          <ul class="nav icons-ul nav-section">
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Ask a Librarian</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Citation Management</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Collections Overview</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Current Awareness</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Introduction to Research</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Research Consultation</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-3">
        <div class="feature">
          <h2>Services</h2>
          <ul class="nav icons-ul nav-section">
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Borrowing and Delivery</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Computing and Equipment</a></li>

            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Digitization, Publishing, and Copyright</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Disability Services</a></li>

            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Library Spaces</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Research Data Management Services</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Passkey and other tools</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Recommend a Purchase</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Workshops and Instruction</a></li>

        </div>
      </div>
      <div class="col-lg-3 col-sm-3">
        <div class="feature">
          <h2>Help for</h2>
          <ul class="nav icons-ul nav-section">
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Alumni</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Faculty and Instructors</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Graduate Students</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Undergraduate Students</a></li>
            <li><a href="#"><i class="fa fa-li fa-chevron-right"></i>Visitors</a></li>
          </ul>
        </div>
      </div>

    </div><!-- /row -->

  </div> <!-- /container -->
</div><!-- /main-content -->

<div class="secondary-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-4">
        <div class="secondary-feature news">
          <a href="#" class="btn btn-rss pull-right"><i class="fa fa-rss"></i></a>
          <h3><i class="fa fa-list-alt"></i>News</h3>
          <span class="title"><a href="#">No more double-spending</a></span>
          <span class="teaser">
            How can libraries stop paying twice for licensing digital content? In Inside Higher Ed, the Library's copyright expert and... <a href="#">more</a>
          </span>
          <span class="more-link"><a href="#">More news &raquo;</a></span>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4">
        <div class="secondary-feature libescope clearfix">
          <a href="#" class="btn btn-rss pull-right"><i class="fa fa-rss"></i></a>
          <h3><i class="fa fa-bullhorn"></i>LibeScope</h3>
          <img src="img/thumb_CherylLibeScope.jpg" class="img-thumbnail pull-right">
          <span class="libescope-type">Staff profile</span>
          <span class="title"><a href="#">Cheryl Beredo</a></span>
          <span class="teaser">
            How do you find your dream job at the Kheel Center? Who she is: Cheryl Beredo, director of the... <a href="#">more</a>
          </span>
          <span class="more-link"><a href="#">More profiles &raquo;</a></span>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4">
        <div class="secondary-feature events">
          <a href="#" class="btn btn-rss pull-right"><i class="fa fa-rss"></i></a>
          <h3><i class="fa fa-calendar"></i>Events</h3>
          <span class="title"><a href="#">Pioneers: Early Women Scientists at Cornell</a></span>
          <span class="teaser">
            This display explores the lives and work of some of the brilliant and fascinating women engaged in scientific research... <a href="#">more</a>
          </span>
          <span class="more-link"><a href="#">More events &raquo;</a></span>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <?php print render($page['footer-primary']); ?>
        <!-- <ul class="menu">
          <li><a href="#">Send feedback</a></li>
          <li><a href="#">CU Info</a></li>
          <li><a href="#">CU home</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Text-only search box</a></li>
          <li><a href="#">Staff login</a></li>
        </ul>
        <p><a href="#">&copy; 2013</a> | Cornell University Library, Ithaca, NY 14853 | (607)255-4144</p> -->
      </div>
      <div class="col-sm-3 text-right">
        <?php print render($page['footer-secondary']); ?>
        <!-- social links -->
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>
