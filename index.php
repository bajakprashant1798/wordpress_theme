<?php get_header(); ?>

<div class="row">

    <div class="col-xs-12 col-sm-8">

        <?php

            if( have_posts() ){

                while( have_posts() )
                { the_post(); 
          
                    // echo 'This is the format:'.get_post_format();

                ?>

                <?php get_template_part('contant',get_post_format()); ?>

        <?php
    
            }
                }
        ?>

    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?> 
    </div>
</div>

<?php get_footer(); ?>