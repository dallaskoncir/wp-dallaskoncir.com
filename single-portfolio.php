<?php
/**
 * The template for displaying all single posts.
 *
 * @package dallaskoncir
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="wrapper">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <h2><?php the_title(); ?></h2>
              <h4><?php the_field('client'); ?></h4>
            </header><!-- .entry-header -->

            <div class="gallery">
              <?php while( has_sub_field('images') ):
                $image = get_sub_field('image'); ?>
                <a href="<?php the_field('url'); ?>" target="_blank">
                  <img src="<?php echo $image['sizes']['large'] ?>">
                </a>
              <?php endwhile; ?>
            </div>

            <div class="entry-content">
              <div class="description">
                <h5><?php the_title(); ?></h5>
                <?php the_content(); ?>
                <a href="<?php the_field('url'); ?>" target="_blank" class="btn">View Live Site</a>
              </div>
              <aside class="portfolio-sidebar">
                <ul>
                  <li>
                    <i class="fa fa-calendar"></i>
                    <?php the_date(); ?>
                  </li>
                  <li>
                    <i class="fa fa-tags"></i>
                    <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo $tag->name . ', '; 
                      }
                    }
                    ?>
                  </li>
                  <li>
                    <i class="fa fa-user"></i>
                    <?php the_field('client'); ?>
                  </li>
                </ul>
              </aside>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
              <?php dallaskoncir_entry_footer(); ?>
            </footer><!-- .entry-footer -->
          </article><!-- #post-## -->

        <?php endwhile; ?>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
