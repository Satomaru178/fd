<?php get_header(); ?>

  <main id="main">
    <?php
    $slug = basename(get_permalink());
    ?>
    <section id="<?php echo $slug ?>" class="wrapper">
      <h3 class="sec-title"><?php the_title(); ?></h3>

      <?php the_content(); ?>
    </section>
  </main>

<?php get_footer(); ?>
