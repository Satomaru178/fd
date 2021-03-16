<?php get_header(); ?>

<main id="main">
  <section id="products" class="wrapper">
    <?php
    $cat = get_the_category();
    $catname = $cat[0]->cat_name;
    ?>
    <h1 class="sec-title"><?php echo $catname; ?></h1>
    <ul class="grid">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
    <?php
    if (function_exists("pagination")) {
      pagination($wp_query->max_num_pages);
    }
    ?>
  </section>
</main>

<?php get_footer(); ?>
