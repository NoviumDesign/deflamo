<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero">
				<div class="hero-container">
					<div class="hero-tagline">
						<h1>Välkommen till den nya generationens flamskyddsmedel</h1>
					</div>
					<div class="hero-icon">
						<img src="<?php bloginfo('template_directory'); ?>/images/flamskydd.png">
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content">

					<div class="orbit-container">
						<img src="http://placehold.it/1200x200">
						<div class="orbit-item">
							<h2>jgiojoiej</h2><p>hgiurshguhriuhgiushrue</p>
						</div>
						<div class="orbit-item">
							<h2>jgiojoiej</h2><p>hgiurshguhriuhgiushrue</p>
						</div>
						<div class="orbit-item">
							<h2>jgiojoiej</h2><p>hgiurshguhriuhgiushrue</p>
						</div>
					</div>

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

				<div class="sidebar">
					<?php get_sidebar(); ?>
					<ul class="contact">
						<li><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/phone.svg">Your browser does not support SVG</object><span class="phone">08-631 91 80</span></li>
						<li class="email"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/mail.svg">Your browser does not support SVG</object><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
