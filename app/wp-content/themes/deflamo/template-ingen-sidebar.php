<?php
/*
Template Name: Ingen Sidebar
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero">
				<div class="hero-container">
					<div class="hero-tagline">
						<h1>Välkommen till den nya generationens flamskyddsmedel</h1>
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content full-width">

					<h1 class="entry-title"><?php //the_title(); ?></h1>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>
				</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
