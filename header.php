<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.
	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="wrapper">
	<header id="header-wrap" class="header">
		
			<nav class="navbar fixed-top navbar-expand-lg ">
				<div class="container nav-container">
					<!-- navbar brand -->
					<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logoYP.png" alt="logoYP">
					</a>
					<button class="navbar-toggler  collapsed  d-flex d-lg-none flex-column justify-content-around0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<!-- custom toggler icon -->
						<span class="toggler-icon top-bar"></span>
						<span class="toggler-icon middle-bar"></span>
						<span class="toggler-icon bottom-bar"></span>
					</button>
					<div class="collapse navbar-collapse text-lg-end" id="navbarNavDropdown">
					<ul class="navbar-nav ">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>">Home</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="<?php echo home_url(); ?>/insurance">Insurance</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#">Consultancy</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#">You had damage?</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#">News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">ENG</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">GER</a>
						</li>

					</ul>
					</div>
				</div>	
			</nav>
			
	</header> 
