<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    	<link rel="shortcut icon" href="favicon.ico">
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-57452863-1', 'auto');
            ga('send', 'pageview');

        </script>
    	<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
        <nav class="navbar navbar-default header" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="<?php echo site_url(); ?>">
                    <img class="logosv, navbar-brand" src="/wp-content/themes/innoveduc_wcs/images/navbarWCS.png">
				</a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    // wp_list_pages(array('title_li' => ''));
                    $defaults = array(
	                    'theme_location'  => 'main_menu',
	                    'menu'            => '',
	                    'container'       => false,
	                    'container_class' => '',
	                    'container_id'    => '',
	                    'menu_class'      => 'menu',
	                    'menu_id'         => '',
	                    'echo'            => true,
	                    'fallback_cb'     => 'wp_page_menu',
	                    'before'          => '',
	                    'after'           => '',
	                    'link_before'     => '',
	                    'link_after'      => '',
	                    'items_wrap'      => '<ul class="nav navbar-nav apm">%3$s</ul>',
	                    'depth'           => 0,
	                    'walker'          => ''
                    );
                    wp_nav_menu($defaults);
                    ?>
                <ul class="nav navbar-right onglet_contact">
                    <li>
                      <a class="nav_item1" href="/?page_id=41">CONTACTEZ-NOUS</a>
                    </li>
                </ul>
            </div>
        </nav>
