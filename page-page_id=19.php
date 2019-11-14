<?php get_header(); ?>

    <?php

        if( have_posts() ){

            while( have_posts() )
            { the_post(); ?>

            <p> <?php the_content(); ?> </p>

            <hr>
    <?php
        }
            }
    ?>

<?php get_footer(); ?>