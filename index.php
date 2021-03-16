<?php get_header(); ?>

<main id="main">
  <section id="recommend" class="wrapper">
    <ul class="grid">
      <?php query_posts('posts_per_page=8'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
          ?>
          <li class="item">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="product-image">
              <p class="title"><?php the_title(); ?></p>
              <p class="price"><?php echo get_post_meta(get_the_ID(), 'price', true) ?> +tax</p>
            </a>
          </li>
      <?php endwhile;
      endif; ?>
    </ul>
    <div class="btn">
      <a href="<?php echo esc_url(home_url()); ?>/category/products/">View More</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
