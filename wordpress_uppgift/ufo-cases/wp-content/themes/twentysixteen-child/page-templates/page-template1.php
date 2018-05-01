<?php
/*
Template Name: My Template 1
*/

//WITHOUT SIDEBAR AND DIFERENT LAYOUT


get_header(); ?>

<main class="temp1_container"><!-- container -->

<section class="temp1_prev_nav">

	<h1>Navigation</h1>
	<?php the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'popper' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'popper' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'popper' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'popper' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );?>

</section>

<section class="temp1_content">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
</section>

</main>
<?php get_footer(); ?>
