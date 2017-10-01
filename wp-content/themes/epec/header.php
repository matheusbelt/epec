<?php


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	?>
</title>

    <meta property="og:type" content="website"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta property="og:url" content="http://epec-ufsc.com.br/"/>
    <meta property="og:image" content="<?php echo bloginfo('template_directory'); ?>/img/logo-maior.png"/>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="EPEC,Empresa Júnior,Engenharia Civil">

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

 <!-- Bootstrap -->
 <link rel="stylesheet" type="text/css"  href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo bloginfo('template_directory'); ?>/css/style_blog.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo bloginfo('template_directory'); ?>/css/style.css">

    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/responsive.css">
	  <!-- Stylesheets -->
    

 <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/animate2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/flexslider.css">

    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/demo.css">

 <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/img/favicon.png">

    <!-- Color Scheme -->
    <link id="test" rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/colors/red.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>

    

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/main.js"></script>
	
	  <!-- JS Libraries -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.min2.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/flexslider.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.backstretch.min.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.nav.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.appear.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.mixitup.min.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.validation.min.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/respond.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/parallax-bg.js"></script>
  

  <!-- Main.js File -->  
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/main2.js"></script>

  <!-- Demo.js -->
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/demo.js"></script>


	<?php wp_deregister_script('jquery');wp_head(); ?>
<?php wp_head(); ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=596778750476464";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo-horizontal.png"></img></a>
        </div>

        <!-- MenuDrop -->
        <?php if (is_front_page() ) : ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right ">
			      <li><a href="#tf-about" class="page-scroll">Serviços</a></li>
            <li><a href="#portfolio" class="page-scroll">A Empresa</a></li>
            <li><a href="#tf-services" class="page-scroll">Portfólio</a></li>
            <li><a href="#tf-clients" class="page-scroll esconder">Resultados</a></li>
			      <li><a href="#tf-blog" class="page-scroll esconder">Blog</a></li>
            <li><a href="http://epec-ufsc.com.br/visita-tecnica/" id="highlight">Agende Sua Visita Técnica</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <?php else : ?>
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right ">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#tf-about" class="page-scroll">Serviços</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#portfolio" class="page-scroll">A Empresa</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#tf-services" class="page-scroll">Portfólio</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#tf-clients" class="page-scroll">Resultados</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#tf-blog" class="page-scroll">Blog</a></li>
            <li><a href="http://localhost/epec/visita-tecnica/" id="highlight">Agende Sua Visita Técnica</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <?php endif; ?>

<!-- Hotjar Tracking Code for http://epec-ufsc.com.br/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:529021,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/2e7f48f4-de3f-4080-9df6-ced390fe3ad7-loader.js" ></script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '482449965449121'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=482449965449121&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->