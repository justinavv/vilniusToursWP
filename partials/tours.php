<section id="tours" class="container">
    <div class="tours">
        <h2><?php the_field('ht_tours_header'); ?></h2>    
            <div class="flex-container">
                <?php
                    if (have_rows('ht_our_tours_repeater')): 
                        while(have_rows('ht_our_tours_repeater')): the_row();
                            ?>
                            <div class="column">
                                <h3><?php the_sub_field('tour_name'); ?></h3>
                                    <p><?php the_sub_field('tour_description'); ?></p>
                            </div>
                            <?php
                        endwhile;
                    endif;
                ?>
            </div>
    </div>
</section>

