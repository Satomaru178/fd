<?php get_header(); ?>

<main id="main">
  <section id="product" class="wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h3 class="sec-title"><?php the_title(); ?></h3>
      <div class="product">
        <div class="product-img">
          <img src="<?php the_post_thumbnail_url('full'); ?>">
        </div>

        <div class="detail">
          <?php the_content(); ?>
          <p>
            ¥<?php
              $price = get_post_meta(get_the_ID(), 'price', true);
              echo number_format($price);
              ?> +tax
          </p>
          <dl>
            <dt>size:</dt>
            <dd><?php echo get_post_meta(get_the_ID(), 'size', true) ?></dd>
            <dt>color:</dt>
            <dd><?php echo get_post_meta(get_the_ID(), 'color', true) ?></dd>
            <dt>material:</dt>
            <dd><?php echo get_post_meta(get_the_ID(), 'material', true) ?></dd>
          </dl>
        </div>
      </div>
    <?php endwhile;
    endif; ?>
    <div class="btn">
      <a href="../products.html">Back To Products</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
