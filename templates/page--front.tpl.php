<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<div class="cornell-brand">
  <div class="container">
    <div class="row">
      <a class="navbar-brand visible-xs" href="http://www.cornell.edu"><img src="/sites/all/themes/bootstrap_cul7/img/layout/cornell-red.gif" alt="Cornell University"></a>
      <div class="navbar-header visible-xs">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
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
          <?php print render($page['jumbotron']); ?>
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
    <div class="libraries-list">
      <div class="row">
        <a data-toggle="collapse" data-target=".libraries-collapse" class="btn btn-libraries">
          Libraries <i class="fa fa-chevron-right"></i>
        </a>
        <!--<#? php print render($page['footer-libraries']); ?>-->
        <div class="libraries-collapse collapse">
          <div class="libraries-group">
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
          <div class="libraries-group">
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
          <div class="libraries-group">
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
        <a class="facebook-button" href="http://www.facebook.com/cornelluniversitylibrary" title="Find us on Facebook"><i class="fa fa-facebook-square" alt="Find us on Facebook"></i></a> 
        <a class="twitter-button" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fwww.library.cornell.edu%2Findex&amp;region=follow_link&amp;screen_name=Cornell_Library&amp;tw_p=followbutton&amp;variant=2.0" title="Follow us on Twitter"><i class="fa fa-twitter-square" alt="Follow us on Twitter"></i></a>
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>

<script type="text/javascript">
  document.getElementById('q').focus()
</script>

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
