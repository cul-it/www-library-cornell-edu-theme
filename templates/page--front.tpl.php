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

<div class="hero" id="hero">
  <div class="container">
    <div class="jumbotron" id="maincontent">

      <div class="row">
        <div class="search-form">
          <h1>Search</h1>
          <form class="form-inline clearfix" role="form" action="//search.library.cornell.edu/" method="get">
            <div class="form-group search-box">
              <label class="sr-only" for="q">Search everything</label>
              <input type="text" class="form-control" id="q" name="q" placeholder="Books, articles, databases, websites and more">
            </div>
            <div class="search-button">
              <button type="submit" class="btn btn-cul">Search</button>
            </div>
          </form>
          <div class="help-links">
            <div class="search-options">
              <!-- <h2>Other search options</h4> -->
              <ul>
                <li><a href="http://newcatalog.library.cornell.edu"><i class="fa fa-external-link"></i> Catalog</a></li>
                <li><a href="http://cornell.summon.serialssolutions.com/"><i class="fa fa-external-link"></i> Articles</a></li>
                <li><a href="http://erms.library.cornell.edu/search~S4"><i class="fa fa-external-link"></i> Database Names</a></li>
                <li><a href="http://erms.library.cornell.edu/"><i class="fa fa-external-link"></i> E-Journal Titles</a></li>
                <li><a href="/visual-resources"><i class="fa fa-external-link"></i> Images</a></li>
              </ul>
            </div>
            <a href="/help/catalog" class="search-help">Help</a>
          </div>
        </div><!-- /search-form -->
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

 

<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=63909,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->
