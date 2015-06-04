<?php
/**
 * The template for the home page.
 * @package dallaskoncir
 **/

get_header(); ?>

    <!-- Intro section -->
    <section id="intro" class="intro">
      <div class="wrapper">
        <div class="intro-text">
          <h2><?php bloginfo('description'); ?></h2>
        </div>
        <a href="#bio" class="btn">Learn More</a>
      </div>
    </section>

    <!-- Bio section -->
    <section id="bio" class="bio">
      <div class="wrapper">
        <?php
          $aboutArgs = array( 'category_name' => 'about-me' );
          $aboutQuery = new WP_Query( $aboutArgs );
          if ( $aboutQuery->have_posts() ) while ( $aboutQuery->have_posts() ) : $aboutQuery->the_post(); ?>

          <h3><?php the_title(); ?></h3>
          <?php the_post_thumbnail('full'); ?>
          <?php the_content(); ?>

        <?php endwhile; // end of the loop. ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </section>

    <!-- Portfolio section -->
    <section id="work" class="work">
      <h3>Check out my latest work!</h3>
      <p>Here is a look at some of my latest projects.</p>
      <div class="portfolio-items">
        <div class="featured">
          <?php 
            $portfolioArgs = array( 'post_type' => 'portfolio', 'category_name' => 'featured' ); 
            $portfolioQuery = new WP_Query( $portfolioArgs );
          if ( $portfolioQuery->have_posts() ) while ( $portfolioQuery->have_posts() ) : $portfolioQuery->the_post(); ?>
          
            <article class="item">
              <figure class="image">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('full'); ?>
                </a>
              </figure>
              <footer>
                <h5>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h5>
                <h6><?php the_field('client'); ?></h6>
              </footer>
            </article>

        <?php endwhile; //end of loop ?>
        <?php wp_reset_postdata(); ?>
        </div>
        <div class="gallery">
          
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="wrapper">
        <h2>Get in Touch</h2>
        <p>Fill out the form and I will get back to you ASAP.</p>
        <div class="form-container">
          <form id="contactForm" method="post" action="" data-parsley-validate>
              <div class="field">
                <label for="name">Name</label>
                  <input type="text" placeholder="Name" id="name" name="name" required>
              </div>
              <div class="field">
                  <label for="email">Email Address</label>
                  <input type="email" placeholder="Email Address" id="email" name="email" required>
              </div>
              <div class="field">
                  <label for="phone">Phone Number</label>
                  <input type="tel" placeholder="Phone Number" id="phone" name="phone" required>
              </div>
              <div class="field">
                  <label for="message">Message</label>
                  <textarea rows="5" placeholder="Message" id="message" name="message" required></textarea>
              </div>
              <div class="submit">
                  <button type="submit">Send</button>
              </div>
            </form>
            <div class="success">
              <p>Thank you for your inquiry.</p>
            </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
