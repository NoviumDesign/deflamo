<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php
	// page image
	$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'page_image');
	$page_image_url = $thumb['0'];
	$hero_image = $page_image_url ? 'background-image: url(' . $page_image_url . ')' : '';
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero" style="background-color:<?php the_field('hero_background_color'); ?>;<?php echo $hero_image; ?>">
				<div class="heropatternholder">
					<div class="hero-container">
						<div class="hero-tagline">
							<h1><?php the_field('image_text'); ?></h1>
						</div>
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content archive">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title">
								<?php
									if ( is_category() ) :
										single_cat_title();

									elseif ( is_tag() ) :
										single_tag_title();

									elseif ( is_author() ) :
										printf( __( 'Author: %s', '_s' ), '<span class="vcard">' . get_the_author() . '</span>' );

									elseif ( is_day() ) :
										printf( __( 'Day: %s', '_s' ), '<span>' . get_the_date() . '</span>' );

									elseif ( is_month() ) :
										printf( __( 'Month: %s', '_s' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', '_s' ) ) . '</span>' );

									elseif ( is_year() ) :
										printf( __( 'Year: %s', '_s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', '_s' ) ) . '</span>' );

									elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
										_e( 'Asides', '_s' );

									elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
										_e( 'Galleries', '_s');

									elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
										_e( 'Images', '_s');

									elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
										_e( 'Videos', '_s' );

									elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
										_e( 'Quotes', '_s' );

									elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
										_e( 'Links', '_s' );

									elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
										_e( 'Statuses', '_s' );

									elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
										_e( 'Audios', '_s' );

									elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
										_e( 'Chats', '_s' );

									else :
										_e( 'Archives', '_s' );

									endif;
								?>
							</h1>
							<?php
								// Show an optional term description.
								$term_description = term_description();
								if ( ! empty( $term_description ) ) :
									printf( '<div class="taxonomy-description">%s</div>', $term_description );
								endif;
							?>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content-arkiv', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php _s_paging_nav(); ?>

					<?php else : ?>

						<?php get_template_part( 'content-arkiv', 'none' ); ?>

					<?php endif; ?>

				</div>

			<div class="sidebar">
					<section class="multiple-widget-container">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-nyheter') ) : ?>
						<?php endif; ?>
					</section>
					<ul class="contact">
						<li><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/phone.svg">Your browser does not support SVG</object><span class="phone">08-631 91 80</span></li>
						<li class="email"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/mail.svg">Your browser does not support SVG</object><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>

			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
