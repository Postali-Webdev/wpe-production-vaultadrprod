<?php
/**
 * Template Name: Client Reviews
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$args = array (
    'post_type' => 'reviews',
    'post_per_page' => '10',
    'post_status' => 'publish',
    'order' => 'DESC',
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy'  => 'review_topic',
            'field'     => 'slug',
            'terms'     => 'featured', // exclude items media items in the news-cat custom taxonomy
            'operator'  => 'NOT IN'
            )
        ),
    );
$the_query = new WP_Query($args);

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article>
                            <?php the_content(); ?>
                            <p><strong><?php the_field('testimonial_author'); ?></strong></p>
                            <?php 
                            $review_logo = get_field('testimonial_logo');
                            if( !empty( $review_logo ) ): ?>
                            <div class="review-logo">
                                <img src="<?php echo esc_url($review_logo['url']); ?>" alt="<?php echo esc_attr($review_logo['alt']); ?>" />
                            </div>
                            <?php endif; ?>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="spacer-60"></div>
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>