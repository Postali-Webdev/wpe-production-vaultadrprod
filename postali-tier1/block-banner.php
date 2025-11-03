<?php if (!empty(get_field('banner_background_image'))) { 
    $bg_image = get_field('banner_background_image');
} else { 
    $bg_image = get_field('default_background_image','options');
} ?>
<section class="banner" style="background-image:url('<?php echo $bg_image; ?>');">
    <div class="container">
    <?php if(is_single()) { ?>
        <p id="breadcrumbs"><span><span><a href="/">Homepage</a> <span class="separator"> / </span> <a href="/blog/">Blog</a> <span class="separator"> / </span> <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p>
    <?php } elseif (is_home()) { ?>
        <p id="breadcrumbs"><span><span><a href="/">Homepage</a> <span class="separator"> / </span> <span class="breadcrumb_last" aria-current="page">Blog</span></span></span></p>
    <?php } else { ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
    <?php } ?>
        <div class="columns">
            <?php if(is_post_type_archive('reviews')) { ?> <!-- for testimonials -->
                <div class="column-50">
                    <h1><?php the_field('testimonials_header_banner_title','options'); ?></h1>
                    <p><?php the_field('testimonials_header_banner_subheadline','options'); ?></p>
                    <p class="cta"><?php the_field('call_to_action_text','options'); ?> </p>
                </div>

                <?php if(get_field('featured_review_content','options')) { ?>
                <div class="column-50 featured">
                    <p class="notable">NOTABLE REVIEW</p>
                    <p><?php the_field('featured_review_content','options'); ?></p>
                    <p class="reviewer"><?php the_field('featured_review_author','options'); ?></p>
                    <?php 
                    $logo = get_field('featured_review_source','options');
                    if( !empty( $logo ) ): ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php } ?>

            <?php } elseif(is_post_type_archive('results')) { ?> <!-- for results -->

                <div class="column-50">
                    <h1><?php the_field('results_header_banner_title','options'); ?></h1>
                    <p><?php the_field('results_header_banner_subheadline','options'); ?></p>
                    <p class="cta"><?php the_field('call_to_action_text','options'); ?> </p>
                </div>

                <?php if(get_field('featured_result_headline','options')) { ?>
                <div class="column-50 result">
                    <div class="result-main">
                        <p class="notable">NOTABLE RESULT</p>
                        <h3><?php the_field('featured_result_headline','options'); ?></h3>
                    </div>
                    <div class="accordions">
                        <div class="accordions_title"><p>View Details <span></span></p></div>
                        <div class="accordions_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et tincidunt purus, et iaculis sem. Nullam a ante justo. Aliquam facilisis, elit in accumsan semper.</p></div>
                    </div>
                </div>
                <?php } ?>

            <?php } else { ?> <!-- end results -->

            <div class="column-66 block">
                <?php if(is_single()) { ?>
                    <p class="blog-date"><strong><?php the_date(); ?></strong></p>
                <?php } ?>
                <?php if (is_404()) { ?>
                    <h1><?php the_field('404_header_banner_title','options'); ?></h1>
                <?php } elseif (is_home()) { ?>
                    <h1><?php the_field('blog_header_banner_title','options'); ?></h1>
                <?php } elseif (is_search()) { ?>
                    <h1 class="post-title"><?php printf( esc_html__( 'Search results for "%s"', 'postali' ), get_search_query() ); ?></h1>
                <?php } elseif (is_page_template('page-practice-parent.php') || is_page_template('page-interior.php')) { ?>
                    <h1><?php the_field('page_title_h1'); ?></h1>
                <?php } elseif (is_page_template('page-landing.php')) { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } else { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } ?>
                <div class="spacer-15"></div>
                <?php if (is_page_template('page-practice-parent.php')) { ?>
                    <p class="cta"><?php the_field('value_proposition'); ?></p>
                <?php } ?>
                <?php if (is_404()) { ?>
                    <p><?php the_field('404_header_banner_subheadline','options'); ?></p>
                <?php } elseif (is_home()) { ?>
                    <p><?php the_field('blog_header_banner_subheadline','options'); ?></p>   
                <?php } elseif (is_page_template('page-landing.php')) { ?>
                    <p><?php the_field('practice_areas_value_prop','options'); ?></p>                 
                <?php } else { ?>
                    <p><?php the_field('banner_value_proposition'); ?></p>
                <?php } ?>
                <?php if(is_single()) { ?>
                    <p class="cta">Written by <?php the_field('blog_author','options'); ?> </p>
                    <p>Category: <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></p>
                <?php } ?>
                <?php if(!is_single()) { ?>
                    <p class="cta"><?php the_field('call_to_action_text','options'); ?> </p>
                <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
    <?php if(get_field('include_gradient_overlay','options')) { ?>
        <div class="banner-gradient"></div>
    <?php } ?>
</section>