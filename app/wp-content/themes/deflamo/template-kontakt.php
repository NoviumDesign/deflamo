<?php
/*
Template Name: Kontakt
*/
get_header(); ?>

<?php
	// page image
	$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'page_image');
	$page_image_url = $thumb['0'];
	$hero_image = $page_image_url ? 'background-image: url(' . $page_image_url . ')' : '';
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero" style="<?php echo $hero_image; ?>">
				<div class="hero-container">
					<div class="hero-tagline">
						<h1><?php the_field('image_text'); ?></h1>
					</div>
					<div class="hero-icon">
						<object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/flamskyddande.svg">Your browser does not support SVG</object>
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content">
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

					<span class="contact">
						<section class="contact-form">
							<span><label for="namn">Namn:</label><input type="text" name="namn"></span>
							<span><label for="epost">Epost:</label><input type="email" name="epost"></span>
							<span><label for="amne">Ämne:</label><input type="text" name="amne"></span>
							<span><label for="meddelande">Meddelande:</label><textarea name="meddelande"></textarea><button>Skicka</button></span>
						</section>
					</span>

				</div>

				<div class="sidebar">
					<h1>Kontakta Deflamo</h1>
					<section>
						<h2>Adress</h2>
						<ul>
							<li>Deflamo AB</li>
							<li>Fakturavägen 4</li>
							<li>SE-175 62 JÄRFÄLLA</li>
							<li>Sverige</li>
						</ul>
					</section>
					<ul class="contact">
						<li><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/phone.svg">Your browser does not support SVG</object><span class="phone">08-631 91 80</span></li>
						<li class="email"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/mail.svg">Your browser does not support SVG</object><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
