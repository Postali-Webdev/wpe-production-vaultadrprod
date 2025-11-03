<?php
/**
 * Template Name: Navigational
 * @package Postali Child
 * @author Postali LLC
**/

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php if ( have_rows('items') ): ?>
                    <?php while ( have_rows('items') ): the_row(); ?>  
                        <div class="column-33">
                            <?php if (get_sub_field('item_link')) { ?>
                            <a href="<?php the_sub_field('item_link'); ?>" title="<?php the_sub_field('item_title'); ?>">
                                <h2><?php the_sub_field('item_title'); ?></h2>
                                <p><?php the_sub_field('item_description'); ?></p>
                            </a>
                            <?php } else { ?>
                                <h2><?php the_sub_field('item_title'); ?></h2>
                                <p><?php the_sub_field('item_description'); ?></p>
                            <?php } ?>
                            </div>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    <div class="spacer-60"></div>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>