<?php
/**
 * Template Name: all-post
 */
get_header(); ?>
<style>
.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.post-card {
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}
.post-card:hover {
    transform: scale(1.02);
}
.post-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
.post-card-content {
    padding: 15px;
}
</style>

<div class="container">
    <h1>All Posts in Cards</h1>
    <div class="card-container">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'projects',
            'posts_per_page' => -1
        ));
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="post-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                        <img src="https://via.placeholder.com/300x200?text=No+Image" alt="No Image">
                    <?php endif; ?>
                    <div class="post-card-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    </div>
                </a>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
