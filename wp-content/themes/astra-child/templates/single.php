<?php
/**
 * Template Name: All Posts Page
 */
get_header(); ?>

<div class="container">
    <h1>All Blog Posts</h1>

    <?php
    $args = array(
        'post_type' => 'proct',
        'posts_per_page' => -1, // Fetch all posts
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
