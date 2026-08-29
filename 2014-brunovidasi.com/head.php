<head>

  <!-- TÍTULO -->
  <title><?php echo TITULO; ?></title>

  <!-- META -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="format-detection" content="telephone=no" />
  <meta name="keywords" content="<?php echo TAGS; ?>">
  <meta name="description" content="<?php echo DESCRICAO; ?>">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="<?php echo AUTOR; ?>">
  <meta name="p:domain_verify" content="4f62c75fdefc840a37d57f6937f9c1bf"/>
  
  <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="google-site-verification" content="4yZ1b2NMRtxMHCE4Z_wYrv0dqA6MPCBSpJlgfOoTv-M" />
  <meta name="google-site-verification" content="vpMsRBP4t7irjB4J6PPLm7m-CNkpJ3FMrCEnZ2x72j8" />
  
<?php /*
  <!-- IDIOMAS -->
  <link rel="alternate" hreflang="pt-br" href="<?php echo BASE_URL; ?>" />
  <link rel="alternate" hreflang="en-us" href="<?php echo BASE_URL_EN; ?>" />
  */ ?>

  <!-- META FACEBOOK -->
  <meta property="og:site_name" content="<?php echo TITULO; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo DESCRICAO; ?>" />
  <meta property="og:url" content="<?php echo BASE_URL; ?>" />
  <meta property="og:image" content="<?php echo ($idioma=='pt') ? BASE_URL.PATH.'/images/thumb.png' : BASE_URL.PATH.'/images/thumb_en.png'; ?>" />
  <link rel="image_src" href="<?php echo ($idioma=='pt') ? './images/thumb.png' : './images/thumb_en.png'; ?>" /> 

  <!-- FAVICON -->
  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

  <!-- CSS -->
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/contact-form.css">
  <link rel="stylesheet" href="css/stellar.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- JAVASCRIPT -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/TMForm.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/jquery.bxslider.js"></script>
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="js/wow/wow.js"></script>
  <script>
    $(document).ready(function (){
      if($('html').hasClass('desktop')){
        new WOW().init();
      }
    });
  </script>
  <!--<![endif]-->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/http://livedemo00.template-help.com/wt_52137/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
    <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
      <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
    </map>
  </div>
  <![endif]-->

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43397149-1', 'auto');
    ga('send', 'pageview');
  </script>

</head>