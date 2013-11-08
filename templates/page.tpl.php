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


<div class="main-content">
  <div class="container">

    <div class="row">
      <div class="col-12"><!--TO DO: SEMANTIC-->
        <?php print render($breadcrumb); ?>
<!--           <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
          </ul> -->
      </div>
    </div>

    <div class="row primary-wrapper">
      <div class="main-text">
        <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php if ($title): ?>
          <h2><?php print $title; ?></h2>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div><!--/main-text-->

      <div class="sidebar">
        <?php print render($page['sidebar']); ?>
      </div><!--/sidebar-->

    </div>
  </div> <!-- /container -->
</div><!-- /main-content -->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-9"><!--TODO: SEMANTIC-->
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
      <div class="col-sm-3 text-right"><!--TODO: SEMANTIC-->
        <?php print render($page['footer-secondary']); ?>
        <!-- social links -->
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>