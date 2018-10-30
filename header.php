<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>

    <body>
        <!--Adding hero-->
        <?php 
        get_template_part('partials/hero'); 
        ?>   
        
<!--Header start-->
        <header class="navigation" id="navbar">
            <div class="container flex-container">  
                <nav class="menu">
                    <a class="burger" onclick=burger()>
                        <i class="fa fa-bars"></i>
                    </a>
                    <ul class="flex-container">
                        <?php 
                        $args = [
                        'menu_class' => 'flex-container', 
                        'container' => false,
                        'theme_location' => 'primary-navigation',
                        ];
                        
                        wp_nav_menu($args);
                        ?> 
                    </ul>    
                </nav>
                <nav class="social-nav">
                    <ul class="flex-container">
                        <?php
                            if( have_rows('sc_social_menu') ):
                                while ( have_rows('sc_social_menu') ) : the_row();
                                $link = get_sub_field('link');
                                //dump($link);
                                if($link['target']=="_blank"){
							    		$target = ' target="_blank"';
							    	}else{
							    		$target = '';
							    	}
                                    ?>
                                    <li>
                                        <a href="<?php echo $link['url']; ?>" <?php echo $target; ?>>
                                            <?php the_sub_field('icon'); ?>
                                        </a>

                                    </li>
                                    <?php
                                endwhile;
                            endif;
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
<!--Header end-->
        