<?php
/*
Template Name: Hem
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero hero-hem">
				<div class="hero-container">
					<div class="hero-tagline">
						<h1>Välkommen till den nya generationens flamskyddsmedel</h1>
					</div>
					<div class="hero-icon">
						<object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/flamskyddande.svg">Your browser does not support SVG</object>
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content">

					<div class="image-carousel clearfix">

						<div class="image active">
							<div class="text">1</div>
							<img class="orbit-image" src="http://placehold.it/1200x300">
						</div>
						<div class="image">
							<div class="text">2</div>
							<img class="orbit-image" src="http://placehold.it/1199x300">
						</div>
						<div class="image">
							<div class="text">3</div>
							<img class="orbit-image" src="http://placehold.it/1198x300">
						</div>

						<div class="orbit-item trigger active">
							<a href="#">
								<h2>Effektivt och snällt mot miljön</h2>
								<p>Vårt flamskyddsmedel Apyrum är unikt på två sätt. Det har hög prestanda samtidigt som det är miljöanpassat.</p>
							</a>
						</div>
						<div class="orbit-item trigger">
							<a href="http://deflamo.dev/apyrum/labb-och-arbetsprocess/">
								<h2>Det ska vara smidigt att byta teknologi. </h2>
								<p>Därför har Deflamo ett nära samarbete med dig som kund under hela skiftet. I vårt eget labb genomför vi alla nödvändiga tester.</p>
							</a>
						</div>
						<div class="orbit-item trigger">
							<a href="http://deflamo.dev/applikationer/vara-utvecklingsapplikationer/">
								<h2>Vilken applikation passar din verksamhet?</h2>
								<p>Vårt flamskyddsmedel Apyrum har utvecklats för att passa en rad olika material och användningsområden.</p>
							</a>
						</div>

						<!-- becouse of :last-child specific width -->
						<div class="orbit-item hide"></div>
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
