<section id="contact" class="container  contact">
    <form class="contact">              
    <?php 
        if (have_posts()): 
            while(have_posts()):
                the_post();
                    ?> 

                    <h2><?php the_field('contact_form_title')?></h2>
                    <?php echo do_shortcode(get_field('cf_contact_form_shortcode')); ?>    
                    <?php
            endwhile;
        endif;

                ?>
    </form>        
</section>