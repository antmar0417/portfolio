<?php get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

       <div class="prose">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
       </div>

    <?php endwhile; ?>

    <?php 

    $args = [
        'numberposts' => 3,
        'order' => 'desc',
    ];
    
    $latestPosts = get_posts($args); 
    
    ?>

    <div class="grid gap-5 grid-flow-col mt-8">
        <?php foreach($latestPosts as $post) : setup_postdata($post) ?>
            
            <a href="<?php the_permalink(); ?>" class="md:w-1/4 mr-4">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
                <h3 class="text-2xl"><?php the_title(); ?></h3>
            </a>

        <?php endforeach; wp_reset_postdata(); ?>
    </div>

    <?php $blogPageUrl = get_post_type_archive_link('post'); ?>
    <a href="<?php echo $blogPageUrl; ?>">All posts</a>

<?php endif; ?>

<?php get_footer(); ?>