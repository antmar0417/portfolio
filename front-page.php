<?php get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

       <div class="prose">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
       </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>