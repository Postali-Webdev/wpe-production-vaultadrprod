<?php
/**
 * Template Name: Practice Areas Landing
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
                <?php 
                    // determine parent of current page
                    if ($post->post_parent) {
                        $ancestors = get_post_ancestors($post->ID);
                        $parent = $ancestors[count($ancestors) - 1];
                    } else {
                        $parent = $post->ID;
                    }

                    $children = wp_list_pages("title_li=&child_of=" . $parent . "&echo=0");

                    if ($children) {
                    ?>
                        <ul class="landing-box">
                            <?php  echo $children;  ?>
                        </ul>
                    <?php 
                    } 
                ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>