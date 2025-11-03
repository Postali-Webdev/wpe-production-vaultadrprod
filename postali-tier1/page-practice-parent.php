<?php
/**
 * Template Name: Practice Parent
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <?php the_field('top_copy_block'); ?>
                </div>
                <div class="column-33 sidebar-block block">
                <?php

                    $children = wp_list_pages( 
                        array(
                            'title_li'      => '',
                            'child_of'      => $post->ID,
                            'echo'          => '0',
                            'meta_key'      => 'page_title_h1',
                            'orderby'       => 'meta_value',
                            'order'         => 'DESC'
                            ) 
                        ); ?>

                        <div class="spacer-15"></div>
                            
                        <?php if ($children) { ?>
                            <?php global $post;
                            $pageid = $post->post_parent;
                            ?>
                            <div class="sidebar-header"><?php the_title(); ?> Topics</div>
                            <div class="sidebar-menu">
                                <ul class="menu" id="menu-practice-areas-menu">
                                    <?php echo $children; ?>
                                </ul>
                            </div>
                            <div class="spacer-30"></div>
                            <p class="sidebar-more"><a href="/practice-areas/" title="All practice areas">All Practice Areas</a> <span class="icon-tick-down"></span></p>

                        <?php } else { ?>
                            <div class="sidebar-header">Our Practice Areas</div>
                            <div class="sidebar-menu">
                                <?php the_field('practice_area_menu','options'); ?>	
                                <div class="spacer-30"></div>
                                <p class="sidebar-more"><a href="/practice-areas/" title="All practice areas">All Practice Areas</a> <span class="icon-tick-down"></span></p>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                    <?php the_field('section_2_copy_block'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="blue" id="testimonial">
        <div class="container">
            <div class="columns">
                <div class="column-50 block">
                    <p class="testimonial-callout"><?php the_field('testimonial_callout','options'); ?></p>
                </div>
                <div class="column-50 block">
                    <p><?php the_field('full_testimonial','options'); ?></p>
                    <div class="author">
                        <?php if(get_field('testimonial_source','options')) { ?>
                            <?php 
                            $source_logo = get_field('testimonial_source','options');
                            if( !empty( $source_logo ) ): ?>
                                <img src="<?php echo esc_url($source_logo['url']); ?>" alt="<?php echo esc_attr($source_logo['alt']); ?>" />
                            <?php endif; ?>
                            <div class="separator"></div>
                        <?php } ?>
                        <p><strong><?php the_field('testimonial_author','options'); ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                    <?php the_field('section_3_copy_block'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('block','pre-footer'); ?>

</div>

<?php get_footer();?>