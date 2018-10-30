<section class="hero"
           style="background-image: url(
                  <?php $image = get_field('hh_hero_background_image'); 
                  echo $image['sizes']['background']; ?>)" 
    >        
    <div class="flex-container">
        <div class="hero-content">
            <h1>
                <?php the_field('hh_hero_main_text'); ?>
            </h1>
            <h4>
                <?php the_field('hh_hero_smaller_text'); ?>
            </h4>
        </div>
    </div>       
</section>
        