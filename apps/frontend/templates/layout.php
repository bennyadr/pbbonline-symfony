<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
  	<title></title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    
    <!-- Le styles -->
    <?php include_stylesheets() ?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  
  	<!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include_javascripts() ?>
  </head>
  
  <body data-spy="scroll" data-target=".subnav" data-offset="50">
  
    <?php include_partial('global/nav') ?>
    <div class="container">
      <?php echo $sf_content ?>
      
      <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p><b>&copy 2012 Haragreen</b> built with <b>Symfony</b> and <b>Bootstrap Twitter</b></p>
      </footer>
    </div>
    
  </body>
</html>
