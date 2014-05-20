<?php
/*
Template Name: Press
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

					<iframe src="http://www.mynewsdesk.com/se/deflamo"></iframe>

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
