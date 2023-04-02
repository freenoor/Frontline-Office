<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lawyer1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css'>
	<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Permanent+Marker&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lawyer1' ); ?></a>

	<div class="topheader">
		<div class="justforspace col-lg-12">
			<div class="justforspace__inner">
			<div class="leftside">
				<?php dynamic_sidebar('adress');?>
			</div>
			<div class="rightside">
			<?php dynamic_sidebar('socials');?>
			</div>
			</div>
		</div>
	</div>
					<header>
						<?php if(is_front_page()):?>
							
							<div class="container-fluid">
								<div class="row">
									<div class="menu-here">
										<nav class="navbar navbar-expand-lg navbar-light navbar-center">

										
											<a class="logo-header animate__pulse animate__animated" href="<?php echo esc_url(home_url('/')); ?>">
												<?php dynamic_sidebar('logo_header');?>
											</a> 
										
											<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
												<div class="hamburger no-scroll" id="hamburger-icon">
													<span class="line line1"></span>
													<span class="line line2"></span>
													<span class="line line3"></span>
												</div>
											</button>
									
											<div class="collapse navbar-collapse overlay-full" id="navbarNav">
												<ul class="navbar-nav">
												<?php wp_nav_menu(
													array(
													'theme_location'    => 'menu-1',
													)
													); 
												?>
												</ul>
											</div>
											
											<div class="call-header">
												<?php dynamic_sidebar('call');?>
												<i class="fas fa-phone-alt"></i>
											</div>

										</nav>
									</div>
								</div>
							</div> 
			<?php else: ?>

			<?php endif;?>
    				</header>

