<?php
/**
 * Template Name: Home Page
 * Description: Page template for home page
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
	<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'its-an-awsome-theme' ) . '">',
				'after'    => '</nav>',
				'pagelink' => esc_html__( 'Page %', 'its-an-awsome-theme' ),
			)
		);
		edit_post_link(
			esc_attr__( 'Edit', 'its-an-awsome-theme' ),
			'<span class="edit-link">',
			'</span>'
		);
	?>
	<!-- hero section -->
	<?php include 'template-parts/hero.php'; ?>
	<!-- welcome section -->
	<?php include 'template-parts/welcome.php'; ?>
	<!-- newsletter section -->
	<?php include 'template-parts/newsletter.php'; ?>
	<!-- 	boat insurance section blog -->
	<?php include 'template-parts/boat-insurance-blog.php'; ?>
		<!-- 	premium image slider -->
	<?php include 'template-parts/premium-slider.php'; ?>
	<!-- 	skipper insurance section blog -->
	<?php include 'template-parts/skipper-insurance-blog.php'; ?>
	<!-- text slider section -->
	<?php include 'template-parts/text-slider.php'; ?>
</div><!-- /#post-
<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	/* if ( comments_open() || get_comments_number() ) {
		comments_template();
	} */

get_footer();
