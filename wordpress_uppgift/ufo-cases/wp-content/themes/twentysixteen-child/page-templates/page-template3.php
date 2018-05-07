<?php
/*
Template Name: My Template 3
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>




			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="slide_img1"></div>
			</div>

			<div class="mySlides fade">
				<div class="slide_img2"></div>
			</div>

			<div class="mySlides fade">
				<div class="slide_img3"></div>
			</div>

		</div>

			<!-- The dots/circles -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
			<br>
		


	</div><!-- #primary -->

<!--without sidebar ==> !Paulo -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>