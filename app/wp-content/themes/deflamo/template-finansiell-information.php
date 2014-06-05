<?php
/*
Template Name: Finansiell Information
*/
get_header(); ?>

<?php
  // page image
  $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'page_image');
  $page_image_url = $thumb['0'];
  $hero_image = $page_image_url ? 'background-image: url(' . $page_image_url . ')' : '';

  // side navbar  
  $parent_page = $post->post_parent ? $post->post_parent : $post->ID;
  $subpages = wp_list_pages('title_li=&child_of=' . $parent_page . '&echo=0');
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="hero" style="<?php echo $hero_image; ?>">
        <div class="hero-container">
          <div class="hero-tagline">
            <h1><?php the_field('image_text'); ?></h1>
          </div>
          <div class="hero-icon">
            <img src="<?php the_field('hero_icon'); ?>">
          </div>
        </div>
      </div>

      <div class="content-container">
        <div class="main-content">

          <?php
            while ( have_posts() ) : the_post();
              get_template_part( 'content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) :
                  comments_template();
                endif;

            endwhile; // end of the loop.
          ?>

          <div class="">

            <div class="tab-toggler-container">

              <a href="#" class="tab-toggler active">
                <?php _e( 'Interim Reports', '_s' ); ?>
              </a>
              <a href="#" class="tab-toggler">
                <?php _e( 'Annual reports', '_s' ); ?>
              </a>
              <a href="#" class="tab-toggler">
                <?php _e( 'General Meetings', '_s' ); ?>
              </a>
            </div>

            <?php


$args_delarsrapport = array(
  'post_type' => 'attachment',
  'order'=> 'DESC',
  'orderby' => 'name',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => array('delarsrapport')
    )
  )
);
$args_arsredovisning = array(
  'post_type' => 'attachment',
  'order'=> 'DESC',
  'orderby' => 'name',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => array('arsredovisning')
    )
  )
); 
$args_bolagstammoprotokoll = array(
  'post_type' => 'attachment',
  'order'=> 'DESC',
  'orderby' => 'name',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => array('bolagstammoprotokoll')
    )
  )
); 


$delarsrapport = get_posts($args_delarsrapport);
$arsredovisning = get_posts($args_arsredovisning);
$bolagstammoprotokoll = get_posts($args_bolagstammoprotokoll);


if ($delarsrapport)
{
  echo '<ul class="tab delarsrapport" style="clear: both">';

  foreach ($delarsrapport as $post) {
    setup_postdata($post);

    echo '<li>';
    echo '<a href="' . wp_get_attachment_url($post->ID) . '" target="_blank">' . get_the_title($post->ID) . '</a>';
    echo '</li>';

  }
  wp_reset_postdata();

  echo '</ul>';
}

if ($arsredovisning)
{
  echo '<ul class="tab arsredovisning hide" style="clear: both">';

  foreach ($arsredovisning as $post) {
    setup_postdata($post);

    echo '<li>';
    echo '<a href="' . wp_get_attachment_url($post->ID) . '" target="_blank">' . get_the_title($post->ID) . '</a>';
    echo '</li>';

  }
  wp_reset_postdata();

  echo '</ul>';
}

if ($bolagstammoprotokoll)
{
  echo '<ul class="tab bolagstammoprotokoll hide" style="clear: both">';

  foreach ($bolagstammoprotokoll as $post) {
    setup_postdata($post);

    echo '<li>';
    echo '<a href="' . wp_get_attachment_url($post->ID) . '" target="_blank">' . get_the_title($post->ID) . '</a>';
    echo '</li>';

  }
  wp_reset_postdata();

  echo '</ul>';
}





            ?>

          </div>

        </div>

        <div class="sidebar">

          <?php if ($subpages) { ?>
            <div id="secondary">
              <aside>
                <h1><?php echo get_the_title($parent_page) ?></h1>
                <ul>
                  <?php echo $subpages; ?>
                </ul>
              </aside>
            </div>
          <?php } ?>

          <?php get_sidebar(); ?>
          <ul class="contact">
            <li><img src="<?php bloginfo('template_directory'); ?>/icons/phone.svg"><span class="phone">08-631 91 80</span></li>
            <li class="email"><img src="<?php bloginfo('template_directory'); ?>/icons/mail.svg"><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
          </ul>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
