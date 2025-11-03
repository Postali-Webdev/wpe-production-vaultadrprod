<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="intro-block">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <span class="banner-desktop"><?php the_field('banner_headline'); ?></span>
                </div>
                <div class="column-50">
                    <div class="intro-block-copy">
                        <?php the_field('banner_copy'); ?>
                        <a class="btn" href="<?php the_field('banner_button_link'); ?>" target="blank"><?php the_field('banner_button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-banner">
        <div class="background-video">
        <?php $video_group = get_field('banner_video'); ?>

            <div class="video-overlay-content">
                <span class="icon-play-button"></span>
            </div>

            <div class="video-embed-wrapper video-cover">
                <video class="video-embed">
                    <source src="<?php echo $video_group['video_url']; ?>" type="video/mp4">
                </video>
            
                <video class="autoplay-thumb" width="500" height="auto" muted autoplay playsinline poster="<?php echo $video_group['thumbnail_image']['url']; ?>">
                    <source src="<?php echo $video_group['thumbnail_short_video']; ?>" type="video/webm">
                    <source src="<?php echo $video_group['thumbnail_short_video_fallback']; ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <section class="hp-features" id="works">
        <div class="container">
            <div class="columns">
                <div class="column-66 center">
                    <?php the_field('panel_2_how'); ?>
                </div>
            </div>

            <?php if(get_field('sign_up_form')) { ?>
            <div class="spacer-60" id="try-it"></div>
            <div class="columns sign-up-form">
                <div class="column-33">
                    <h3><?php the_field('panel_2_form_headline'); ?></h3>
                    <div class="spacer-30"></div>
                    <p><strong><?php the_field('panel_2_form_subhead'); ?></strong></p>
                </div>
                <div class="column-66">
                    <p><?php the_field('panel_2_form_copy'); ?></p> 

                    <?php echo do_shortcode('[hubspot type="form" portal="44606527" id="55304f7d-3561-4450-a4f2-7de4621bf681"]'); ?>

                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <section class="hp-separator-compromise">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <p class="green caps spaced"><?php the_field('separator_headline'); ?></p>
                    <p><?php the_field('separator_copy'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-pricing" style="background:url('<?php the_field('panel_4_background'); ?>');" id="pricing">
        <div class="container">
            <div class="columns">
                <div class="column-66 block center centered">
                    <h2><?php the_field('panel_4_headline'); ?></h2>
                    <p><?php the_field('panel_4_copy'); ?></p>
                </div>
                <div class="spacer-60"></div>
                <?php if ( have_rows('pricing_containers_1') ): ?>
                <?php while ( have_rows('pricing_containers_1') ): the_row(); ?>  
                    <div class="column-33 pricing" id="box_1">
                        <div class="box-top">
                            <h3><?php the_sub_field('headline'); ?></h3>
                            <p><?php the_sub_field('copy'); ?></p>
                        </div>
                        <div class="box-bottom">
                            <div class="price">
                                <span class="amount"><?php the_sub_field('price'); ?></span><span class="description"> <?php the_sub_field('price_description'); ?></span>
                            </div>
                            <?php if ( have_rows('touts') ): ?>
                            <ul>
                            <?php while ( have_rows('touts') ): the_row(); ?>  
                                <li><?php the_sub_field('tout'); ?></li>
                            <?php endwhile; ?>
                            </ul>
                            <?php endif; ?> 
                            <?php if(get_sub_field('button_text')) { ?>
                                <a href="<?php the_sub_field('button_link'); ?>" title="<?php the_sub_field('button_link'); ?>" class="btn wide"><?php the_sub_field('button_text'); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 

                <?php if ( have_rows('pricing_containers_2') ): ?>
                <?php while ( have_rows('pricing_containers_2') ): the_row(); ?>  
                    <div class="column-33 pricing" id="box_2">
                        <div class="box-top">
                            <h3><?php the_sub_field('headline'); ?></h3>
                            <p><?php the_sub_field('copy'); ?></p>
                        </div>
                        <div class="box-bottom">
                            <div class="price">
                                <span class="amount"><?php the_sub_field('price'); ?></span><span class="description"> <?php the_sub_field('price_description'); ?></span>
                            </div>
                            <?php if ( have_rows('touts') ): ?>
                            <ul>
                            <?php while ( have_rows('touts') ): the_row(); ?>  
                                <li><?php the_sub_field('tout'); ?></li>
                            <?php endwhile; ?>
                            </ul>
                            <?php endif; ?> 
                            <?php if(get_sub_field('button_text')) { ?>
                                <a href="<?php the_sub_field('button_link'); ?>" title="<?php the_sub_field('button_link'); ?>" class="btn wide" target="blank"><?php the_sub_field('button_text'); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 

                <?php if ( have_rows('pricing_containers_3') ): ?>
                <?php while ( have_rows('pricing_containers_3') ): the_row(); ?>  
                    <div class="column-33 pricing" id="box_3">
                        <div class="box-top">
                            <h3><?php the_sub_field('headline'); ?></h3>
                            <div class="spacer-15"></div>
                            <p><?php the_sub_field('copy'); ?></p>
                        </div>
                        <div class="spacer-30"></div>
                        <div class="box-bottom">
                        
                        <?php echo do_shortcode('[hubspot type="form" portal="44606527" id="c6a1ab6d-7d35-414d-871e-9100dafbda0f"]'); ?>                        

                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </section>

    <section class="hp-features-2">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <h2><?php the_field('panel_5_headline'); ?></h2>
                </div>
                <div class="column-33 button">
                    <a href="/contact/" title="View Pricing" class="btn">SCHEDULE A DEMO</a>
                </div>
            </div>
            <div class="spacer-30"></div>
            <div class="columns normal">
                <?php if ( have_rows('panel_5_feature_callouts') ): ?>
                <?php while ( have_rows('panel_5_feature_callouts') ): the_row(); ?>  
                    <div class="column-33 shadowed">
                        <h3><?php the_sub_field('feature_headline'); ?></h3>
                        <p><?php the_sub_field('feature_copy'); ?></p>
                        <a href="<?php the_sub_field('feature_link'); ?>" title="Learn more about <?php the_sub_field('feature_headline'); ?>">Learn More <span class="icon-right-arrow"></span></a>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>

            <div class="spacer-60"></div>
            <div class="columns">
                <div class="column-66 center">
                <?php 
                $image = get_field('panel_5_starting_img');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-resources" style="background:url('<?php the_field('panel_6_background'); ?>');" id="pricing">
        <div class="container">
            <div class="columns">
                <div class="column-full">


                    <div class="columns sign-up-form">
                        <div class="column-33">
                            <h3><?php the_field('panel_6_form_headline'); ?></h3>
                            <div class="spacer-30"></div>
                            <p><strong><?php the_field('panel_6_form_subhead'); ?></strong></p>
                        </div>
                        <div class="column-66">
                            <p><?php the_field('panel_6_form_copy'); ?></p> 

                            <?php echo do_shortcode('[hubspot type="form" portal="44606527" id="f4c82044-e494-47c9-8c10-f0858c58e1eb"]'); ?>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="hp-pre-footer">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('panel_7_headline'); ?></h2>
                    <p><?php the_field('panel_7_copy'); ?></p>

                    <?php echo do_shortcode('[hubspot type="form" portal="44606527" id="cfac6158-1969-4670-af80-9f4b07ea7f2d"]'); ?>

                </div>
                <div class="column-50">
                <?php if ( have_rows('inquiry_blocks') ): ?>
                <?php while ( have_rows('inquiry_blocks') ): the_row(); ?>  
                    <div class="column-25 shadowed">
                        <p class="headline"><?php the_sub_field('inquiry_type'); ?></p>
                        <p><strong>Call: </strong> <a href="tel:<?php the_sub_field('phone_number'); ?>" title="Call VaultADR today"><?php the_sub_field('phone_number'); ?></a></p>
                        <p><strong>Email: </strong><a href="mailto:<?php the_sub_field('email_address'); ?>" title="Email VaultADR today"><?php the_sub_field('email_address'); ?></a></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

</div><!-- #front-page -->

<?php get_footer();?>