<!DOCTYPE HTML>
<html>

<head>
  <title>Disha Holidays</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="../../pr/photoatwork_bokeh/css/style.css" rel="stylesheet" type="text/css" />
  <link href="../../pr/photoatwork_bokeh/css/portfolio_one.css" rel="stylesheet" type="text/css" />
  <link href="../../pr/photoatwork_bokeh/css/dark.css" rel="stylesheet" type="text/css" />
  <!-- we only want the thunbnails to display when javascript is disabled -->
  <script type="text/javascript">
    document.write('<style>.noscript { display: none; }</style>');
  </script>
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../../pr/photoatwork_bokeh/js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">

    <!-- begin header -->
    <header>
      <div id="logo"><h1>Back to <a href="index.php">Disha Holidays</a></h1></div>
     
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <!-- start gallery HTML containers -->
      <div id="gallery" class="content">
        <div class="slideshow-container">
          <div id="loading" class="loader"></div>
          <div id="slideshow" class="slideshow"></div>
        </div>
      </div>
      <div id="thumb-container">
        <div id="thumbs" class="navigation">
          <h1>Portfolio One</h1>
          <ul class="thumbs noscript">
            <?php
include('connection.php');	
$qry="select image from package_master" ;

$rst=mysql_query($qry,$con);
 while($row=mysql_fetch_array($rst)) 
  {
?>
            <li>
              <a class="thumb" href="pkg/<?php echo $row['image']; ?>"><img src="pkg/<?php echo $row['image']; ?>" alt="one" height="75" width="75" /></a>
         
            </li>
<?php
 } 
 ?>
          </ul>
        </div>
        <div id="controls" class="controls portfolio_one"></div>
        <div id="caption" class="caption-container"></div>
        <div style="clear: both;"></div>
        <!-- end gallery HTML containers -->
      </div>
    </div>
    <!-- end content -->

 
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="../../pr/photoatwork_bokeh/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../pr/photoatwork_bokeh/js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../../pr/photoatwork_bokeh/js/jquery.sooperfish.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
  <script type="text/javascript" src="../../pr/photoatwork_bokeh/js/jquery.galleriffic.js"></script>
  <script type="text/javascript" src="../../pr/photoatwork_bokeh/js/jquery.opacityrollover.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      // we only want these styles applied when javascript is enabled
      $('div.navigation').css({'width' : '450px', 'float' : 'left'});
      $('div.content').css('display', 'block');
      // initially set opacity on thumbs and add additional styling for hover effect on thumbs
      var onMouseOutOpacity = 0.67;
      $('#thumbs ul.thumbs li').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  1.0,
        fadeSpeed:         'fast',
        exemptionSelector: '.selected'
      });
      // initialize advanced galleriffic gallery
      var gallery = $('#thumbs').galleriffic({
        delay:                     3500,
        numThumbs:                 10,
        preloadAhead:              10,
        enableTopPager:            false,
        enableBottomPager:         true,
        maxPagesToShow:            7,
        imageContainerSel:         '#slideshow',
        controlsContainerSel:      '#controls',
        captionContainerSel:       '#caption',
        loadingContainerSel:       '#loading',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              'Play Slideshow',
        pauseLinkText:             'Pause Slideshow',
        prevLinkText:              '&lsaquo; Previous Photo',
        nextLinkText:              'Next Photo &rsaquo;',
        nextPageLinkText:          'Next &rsaquo;',
        prevPageLinkText:          '&lsaquo; Prev',
        enableHistory:             false,
        autoStart:                 false,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // 'this' refers to the gallery, which is an extension of $('#thumbs')
          this.find('ul.thumbs').children()
            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
            .eq(nextIndex).fadeTo('fast', 1.0);
        }
      });
    });
  </script>
</body>
</html>
