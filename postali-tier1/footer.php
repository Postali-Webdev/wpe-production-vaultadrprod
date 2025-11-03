<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <section class="footer">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="spacer-60"></div>

                <div class="column-20 block menu">
                    <p><strong>Site Navigation</strong></p>
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'footer-nav'
                        );
                        wp_nav_menu( $args );
                    ?>	
                </div>

                <div class="spacer-60"></div>

                <div class="footer-utility">
                    <div class="utility">
                    <?php if ( have_rows('utility_links','options') ): ?>
                    <?php while ( have_rows('utility_links','options') ): the_row(); ?>  
                        <a href="<?php the_sub_field('utility_page_link'); ?>"><?php the_sub_field('utility_link_text'); ?></a>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    </div>
                    <div class="disclaimer">
                        <p class="small"><?php the_field('disclaimer_text','options'); ?></p>
                        <?php if(is_page_template('front-page.php')) { ?>
                        <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:20px 0 15px;"></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</footer>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/44606527.js"></script>
<!-- End of HubSpot Embed Code -->

    <script>
    jQuery(document).ready(function(){
        // Target your .container, .wrapper, .post, etc.
        jQuery(".video").fitVids();
    });
    </script>

<?php wp_footer(); ?>
</body>
</html>


