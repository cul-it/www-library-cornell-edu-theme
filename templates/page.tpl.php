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
    </div><!--/.navbar-collapse -->
  </div>
</div>


<div class="main-content">
  <div class="container">
    <?php print render($breadcrumb); ?>

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
      <div class="footer-primary"><!--TODO: SEMANTIC-->
        <?php print render($page['footer-primary']); ?>
      </div>
      <div class="footer-secondary"><!--TODO: SEMANTIC-->
        <?php print render($page['footer-secondary']); ?>
        <!-- social links -->
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>