<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="distribution" content="global"/>
<meta name="author" content="CV Private Chef"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="x-country" content="MX"/>
<meta http-equiv="Content-Language" content="es"/>
<link rel="manifest" href="manifest.json">
<meta name="msapplication-config" content="none"/>
<meta name="mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="msapplication-starturl" content="/"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<style type="text/css">
            @font-face {
                font-family: 'icomoon';
                src:  url('https://d1zzxdyvtq79bu.cloudfront.net/bundles/tacapp/icons/fonts/icomoon.eot?4ho0fs');
                src:  url('https://d1zzxdyvtq79bu.cloudfront.net/bundles/tacapp/icons/fonts/icomoon.eot?4ho0fs#iefix') format('embedded-opentype'),
                url('https://d1zzxdyvtq79bu.cloudfront.net/bundles/tacapp/icons/fonts/icomoon.ttf?4ho0fs') format('truetype'),
                url('https://d1zzxdyvtq79bu.cloudfront.net/bundles/tacapp/icons/fonts/icomoon.woff?4ho0fs') format('woff'),
                url('https://d1zzxdyvtq79bu.cloudfront.net/bundles/tacapp/icons/fonts/icomoon.svg?4ho0fs#icomoon') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            section[id^="card_"] {
                display: none;
            }
</style>
<?php wp_head(); ?>
<?php
    if (is_page(25)){ ?>

        <link rel="stylesheet" href="/wp-content/themes/cvprivatechef/wizard/css/app-global.min.css" type="text/css" />
        <link rel="stylesheet" href="/wp-content/themes/cvprivatechef/wizard/css/frontend-frontend.min.css" type="text/css" />
        <link rel="stylesheet" href="/wp-content/themes/cvprivatechef/wizard/css/frontend-userrequests.min.css" type="text/css" />
        <link rel="stylesheet" href="/wp-content/themes/cvprivatechef/wizard/css/custom.css" type="text/css" />
        <script src="/wp-content/themes/cvprivatechef/wizard/js/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" href="/wp-content/themes/cvprivatechef/wizard/css/jquery-ui.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.min.css">
        <script>window.jQuery || document.write('<script src="//code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"><\/script>');</script>

<?php    }

?>

</head>

<body <?php body_class(); ?>  <?php if(is_page(24)){echo 'class="tac-wizard-light-theme"';} ?>>
<?php
if (!is_page(25)){
?>

<header class="tac-header homepage-header">
        <div class="menu-logo-container">
				<div class="logo">
					<img src="/wp-content/themes/cvprivatechef/images/logo.png">
				</div>
				<div class="menu">
					<nav class="collapse navbar-collapse" role="navigation">
						<ul id="menu-primary-navigation" class="nav navbar-nav">
							<?php $menu = wp_get_nav_menu_items("Main-menu"); 

								foreach ($menu as $item) {
									echo '

										<li class="menu-about">
											<a class="ajax" href="#'.$item->post_name.'">'.$item->title.'</a>
										</li>


									';
								}

							?>
						</ul>
					</nav>
				</div>
			</div>
	        
	        <a href="#servicios" class="header-down">
	            <span class="icon-arrow-down-simple"></span>
	        </a>
	        <div class="header-bg">
	        	
	        </div>
	        <div class="content">
		         <div class="alert-container">
		         </div>
		            <h1>LOREM IPSUM DOLOR</h1>
		            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non nunc at mi accumsan tempor nec vel dui. In quis tincidunt ante, sed porta elit.Aenean elementum nisi ac faucibus consectetur.</h2>

		            <a href="/wizard/" class="tac-button tac-orange" id="hp_btn_start_up">
		                Empezar
		            </a>
		        </div>
   	        <div class="overlay"></div>

	    </header>


<?php } ?>