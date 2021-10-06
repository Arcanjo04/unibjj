<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo('name') ?><?php wp_title(); ?></title>

    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700,700italic' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css "media="all" rel="stylesheet" /> 
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" />

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      <?php wp_head(); ?>
  </head>
  <body>
    
            <div class="header">

              <div class="container">
              
                <div class="row"> 
                  
                  <div class="col-md-3 logo"><a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_unibjj.png" class="img-responsive center-block" alt="UniversoBJJ" title="UniversoBJJ"></a></div>
                 
                  <div class="col-md-7">

                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                            <a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Menu</a>
                        </div>

                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'primary',
                                        'theme_location'    => 'primary',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>


                      </div><!-- /.container-fluid -->

                    </nav>

                  </div>

                  <div class="col-md-2 visible-lg">

              <nav class="navbar navbar-default ">
                  <div class="container-fluid">
                    <div class="navbar-header">

                          <ul class="nav navbar-nav navbar-right ">
                                                  
                            <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>

                            <li><a href="https://www.facebook.com/unibjj/" target="_blank"><i class="fa fa-facebook"></i></a></li>
   
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                          
                          </ul> 

                    </div>
                  </div>
              </nav>

                  </div>
                                            <!-- mobile bar -->
                    
                                  <?php get_search_form();?>

                </div>

              </div>

            </div>
            <!-- FIM HEADER -->