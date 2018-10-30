        <footer>
            <div class="container">
                    <p><?php the_field('hf_footer_text'); ?></p>
                    <p>
                        <a href="mailto:<?php get_field('hf_footer_email_address'); ?>">
                        <?php the_field('hf_footer_email_address'); ?>
                        </a>
                    </p>
                    <p>
                        <a href="callto:<?php get_field('hf_footer_phone_number'); ?>">
                            <?php the_field('hf_footer_phone_number'); ?>
                        </a>
                    </p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>