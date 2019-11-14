<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Theme</title>

    <?php wp_head(); ?>

</head>

<?php

    if( is_front_page() ){
        $prashant_classes = array('prashant-class','my-class');
    }
    else{
        $prashant_classes = array('no-prashant-class');
    }
?>

<body <?php body_class( $prashant_classes ); ?>>
    
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12">

            <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-right">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                            <span class="sr-only">Toggle navigation</span>
                            <span calss="icon-bar"></span>
       
                            </button>
                            <!--navbar-header -->
                        </div>
                <a class="navbar-brand" href="#">Prashant Theme</a>

                <p style="margin-left: 670px">

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <?php 
                    wp_nav_menu(array(
                        'theme_location'=>'primary',
                        'container'=>false,
                        
                        'menu_class'=>'navbar-nav mr-auto',
                        
                        )
                    ); 
                    // var_dump(get_custom_header())
                    
                ?>


                <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">Toggle navigation</span>
                            <span calss="icon-bar"></span>
                            <span calss="icon-bar"></span>
                            <span calss="icon-bar"></span>
                            </button>
                            navbar-header 
                        </div>
                <a class="navbar-brand" href="#">Prashant Theme</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <?php 
                    // wp_nav_menu(array(
                    //     'theme_location'=>'primary',
                    //     'container'=>false,
                    //     'menu_class'=>'navbar-nav mr-auto'
                    //     )
                    // ); 
                    // var_dump(get_custom_header())
                ?>
                </div>
                </p>
    
                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        
                    
                    </ul>
                </div> -->
                </div>
                </nav>
         


            
        </div>
    </div>
    
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
