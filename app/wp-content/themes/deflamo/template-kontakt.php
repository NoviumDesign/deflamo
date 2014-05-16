<?php
/*
Template Name: Kontakt
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero hero-contact">
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
						
					<span class="portraits">
						<div class="employee">
							<img src="<?php bloginfo('template_directory'); ?>/images/stefan-eriksson.jpg">
							<ul>
								<li>Stefan Eriksson</li>
								<li>Säljare</li>
								<li>0761 - 372 032</li>
								<li><a href="#">stefan@deflamo.se</a></li>
							</ul>
						</div>
						<div class="employee">
							<img src="<?php bloginfo('template_directory'); ?>/images/susanne-brandhild.jpg">
							<ul>
								<li>Susanne Brandhild</li>
								<li>Säljare</li>
								<li>0761 - 372 043</li>
								<li><a href="#">susanne@deflamo.se</a></li>
							</ul>
						</div>
						<div class="employee">
							<img src="<?php bloginfo('template_directory'); ?>/images/arvid-lundkvist.jpg">
							<ul>
								<li>Arvid Lundkvist</li>
								<li>Säljare</li>
								<li>0761 - 372 063</li>
								<li><a href="#">arvid@deflamo.se</a></li>
							</ul>
						</div>
					</span>

					<span class="contact">
						<section class="contact-form">
							<span><label for="namn">Namn:</label><input type="text" name="namn"></span>
							<span><label for="epost">Epost:</label><input type="text" name="epost"></span>
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
