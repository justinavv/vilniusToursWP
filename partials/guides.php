<section id="guides" class="container">
    <div class="guides">
        <h2><?php the_field('hg_guides_header'); ?></h2>
            <div class="flex-container">
                <?php 
                    if (have_rows('hg_our_guides_repeater')): 
                        while(have_rows('hg_our_guides_repeater')): the_row();
                        $image= get_sub_field('guide_image');
                        //dump($image);
                            ?>
                <div class="column">
                    <h3><?php the_sub_field('guide_name'); ?></h3>
                        <img src="<?php echo $image['sizes']['square']; ?>" alt="<? echo $image[alt]?>">
                        <p><?php the_sub_field('guide_description')?></p>
                </div>
                            <?php
                        endwhile;
                    endif;
                ?>
            </div>
    </div>
</section>

