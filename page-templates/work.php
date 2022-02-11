<?php /* Template Name: Work */ ?>

<?php get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php $projects = get_posts(['post_type' => 'project']); ?>
<ul>
    <?php foreach($projects as $post): setup_postdata($post); ?>
        <?php $tools = get_the_terms($post, 'tool'); ?>
        <a class="text-gray-500 hover:bg-gray-700 hover:text-white px-3 py-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php foreach($tools as $tool) : ?>
            <a class="text-gray-500 hover:bg-gray-700 hover:text-white px-3 py-2" href="<?= get_term_link($tool); ?>"><?= $tool->name; ?></a>
        <?php endforeach; ?>
    <?php endforeach; ?>
</ul>
<?php get_footer(); ?>