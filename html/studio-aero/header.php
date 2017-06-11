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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.11.3.min.js"></script>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
		<script type="text/javascript">
	       (function(){
	           if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('OS 5') < 0 &&
	               navigator.userAgent.indexOf('iPad') == -1) ||
	               navigator.userAgent.indexOf('iPod') > 0 ||
	               navigator.userAgent.indexOf('Android') > 0) {
	               document.write('<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/sp_style.css" />'); }else {
	                   document.write('<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" />');
	               }

	           })();
	</script><!--CSS切り替えここまで-->	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJNK99S');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJNK99S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">
			<div class="header_wrap">
				<div class="logo">
					<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/common/logo.png"width="100%"></a>
				</div>
				<div class="header_right">
					<div class="storelogo">	</div>
					<div class="h_social_menu">

						<div class="social_icon">
							<a href="https://www.facebook.com/Studio-aero-326236047777853/" target="_blank"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/common/facebook_icon.png"></a> <a href="https://www.youtube.com/channel/UCmJgIj_0k0-8rkF5H4IKivQ" target="_blank"><img alt="a" src="<?php bloginfo('template_directory'); ?>/assets/images/common/youtube_icon.png"></a> <a href="https://www.instagram.com/studio_aero_sakurazaka/" target="_blank"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/common/instagram_icon.png"></a> <a href="mailto:aero@studio-aero.jp?subject=お問い合わせ"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/common/mail_icon.png"></a>
						</div>
					</div>
				</div>

			</div>
		</header><!-- #masthead -->

		<div class="site-content-contain">
			<div id="content" class="site-content">
			
				<div class="slide">
			<!-- スライド挿入部 -->
			<?php if ( is_home() || is_front_page() ) :
echo do_shortcode('[metaslider id=1015]');
  endif; ?>
		
		<div class="global">
			<ul>
				<li class="foryou">
					<a href="/foryou/"></a>
				</li>
				<li class="bookings">
					<a href="/booking/"></a>
				</li>
				<li class="service">
					<a href="/service/"></a>
				</li>
				<li class="prices">
					<a href="/prices/"></a>
				</li>
				<li class="gallery">
					<a href="/gallery/"></a>
				</li>
				<li class="testimonials">
					<a href="/testimonials/"></a>
				</li>
				<li class="staff_blog">
					<a href="/staff_blogs/"></a>
				</li>
				<li class="access">
					<a href="/access/"></a>
				</li>
			</ul>
		</div>