<?php
/*
Template Name: Apyrum
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero">
				<div class="hero-container">
					<div class="hero-tagline">
						<h1><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/check.svg">Your browser does not support SVG</object> Hög Prestanda</h1>
						<h1><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/check.svg">Your browser does not support SVG</object> Bra Pris</h1>
						<h1><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/check.svg">Your browser does not support SVG</object> Miljöanpassat</h1>
					</div>
					<div class="hero-icon">
						<img src="<?php bloginfo('template_directory'); ?>/images/framtid.png">
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content">

					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="two-columns">
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
				</div>

				<div class="sidebar">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-apyrum') ) : ?>
					<?php endif; ?>
					<ul class="contact">
						<li><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/phone.svg">Your browser does not support SVG</object><span class="phone">08-631 91 80</span></li>
						<li class="email"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/mail.svg">Your browser does not support SVG</object><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
