<?php if(get_field('add_testimonial','options')) { ?>
    <div class="testimonial-block">
        <p class="testimonial"><?php the_field('sidebar_testimonial','options'); ?></p>
        <p><strong><?php the_field('sidebar_testimonial_author','options'); ?></strong></p>
        <?php if(get_field('sidebar_testimonial_source','options')) { ?>
            <?php 
            $source = get_field('sidebar_testimonial_source','options');
            if( !empty( $source ) ): ?>
                <img src="<?php echo esc_url($source['url']); ?>" alt="<?php echo esc_attr($source['alt']); ?>" />
            <?php endif; ?>
        <?php } ?>
    </div>
    <div class="spacer-30"></div>
    <p class="sidebar-more"><a href="/testimonials/" title="Read more testimonials">Read More Testimonials</a> <span class="icon-tick-down"></span></p>
    <div class="sidebar-spacer"></div>
<?php } ?>

<?php if(get_field('add_result','options')) { ?>
    <div class="sidebar-header">NOTABLE RESULT</div>
    <div class="result-block">
        <p class="large"><strong><?php the_field('sidebar_result_headline','options'); ?></strong></p>
        <p class="result"><?php the_field('sidebar_result','options'); ?></p>
    </div>
    <div class="spacer-30"></div>
    <p class="sidebar-more"><a href="/results/" title="Read more results">Read More Results</a> <span class="icon-tick-down"></span></p>
    <div class="sidebar-spacer"></div>
<?php } ?>
<?php
    if ( is_page_template('page-interior.php') ) :
        if( $post->post_parent ) {
            $children = wp_list_pages( 
                array(
                    'title_li'      => '',
                    'child_of'      => $post->post_parent,
                    'echo'          => '0',
                    'meta_key'      => 'page_title_h1',
                    'orderby'       => 'meta_value',
                    'order'         => 'DESC'
                ) 
            );
        } else {
            $children = wp_list_pages( 
                array(
                    'title_li'      => '',
                    'child_of'      => $post->ID,
                    'echo'          => '0',
                    'meta_key'      => 'page_title_h1',
                    'orderby'       => 'meta_value',
                    'order'         => 'DESC'
                ) 
            );
        }

        if ($children) { ?>
        <?php global $post;
        $pageid = $post->post_parent;
        ?>
            <div class="sidebar-header">
                <?php the_field('sidebar_menu_title', $pageid); ?>
            </div>
            <div class="sidebar-menu">
                <ul class="menu" id="menu-practice-areas-menu">
                    <?php echo $children; ?>
                </ul>
            </div>

        <?php } else { ?>
            <div class="sidebar-header">Our Solutions</div>
            <div class="sidebar-menu">
                <?php the_field('practice_area_menu','options'); ?>	
                <div class="spacer-30"></div>
                <p class="sidebar-more"><a href="/solutions/" title="Read more results">All Solutions</a> <span class="icon-tick-down"></span></p>
            </div>
        <?php } ?>
    <?php endif; ?>