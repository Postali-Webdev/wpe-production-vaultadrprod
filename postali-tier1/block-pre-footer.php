    <section id="pre-footer">
        <div class="container">
            <div class="columns">
                <div class="column-75 center centered block">
                    <h2><?php the_field('pre_footer_headline','options'); ?></h2>
                    <p class="subhead"><?php the_field('pre_footer_subheadline','options'); ?></p>
                    <p><?php the_field('pre_footer_copy','options'); ?></p>
                    <div class="pre-footer-contact">
                        <div class="contact-block-left">
                            <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn <?php if(get_field('pre_footer_button_style','options') == 'secondary') { ?>secondary<?php } ?>"><?php the_field('phone_number','options'); ?></a>
                        </div>
                        <?php if (!is_page_template('page-contact.php')) { ?>
                        <div class="contact-block-right">
                            <p><a href="/contact/" title="Online form">Contact Us Online</a> <span class="icon-right-arrow"></span></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>