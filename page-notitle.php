<?php get_header(); 
/*
    Template Name: Page No Title
*/ 
?>
<div class="row">

<div class="col-xs-12 col-sm-8">
    <?php

        if( have_posts() ){

            while( have_posts() )
            { the_post(); ?>
            <h1>This is my Static Title</h1>
            <small> post on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

            <p> <?php the_content(); ?> </p>

            <hr>
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