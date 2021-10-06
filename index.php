<?php get_header(); ?>

                  <div class="container">

                     <div class="row">

                        <div class="col-md-8 slider-noticia">

                          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                            <?php
                              $posts_slides =  new WP_Query(array(
                                'category_name' => 'destaque-slider',
                                'posts_per_page' => 4
                                ));
                                $i = 1;
                                while($posts_slides->have_posts()) : $posts_slides->the_post();
                            ?>

                              <div class="item <?php if($i == 1) echo 'active';?>">
                       <a href="<?php the_permalink(); ?> "> <?php the_post_thumbnail('thumbnail-slide'); ?> </a>
                                <div class="carousel-caption visible-lg">
                                  <h2><?php the_title(); ?></h2>
                                  <span><?php echo rwmb_meta('subtitulo'); ?></span>
                                </div>
                              </div>
                             <?php $i++; endwhile; wp_reset_postdata(); ?>

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                        </div>

                        <div class="col-md-4 itens-destaques">

                          <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#maisvistos" aria-controls="maisvistos" role="tab" data-toggle="tab">+Vistos</a></li>
                              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">+Comentados</a></li>
                              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">+Assistidos</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="maisvistos">

                                <ul class="list-group">

                                     <?php if (function_exists('get_most_viewed')): ?>
                                       <?php get_most_viewed('post',5); ?>
                                     <?php endif; ?>

                                </ul>

                              </div>

                              <div role="tabpanel" class="tab-pane" id="profile">

        <ul class="list-group">

        <?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 5 ");
        foreach($result as $post){
          setup_postdata($post);
          $postid = $post->ID;
          $title = $post->post_title;
          $commentcount = $post->comment_count;
          if($commentcount != 0){?>

          <li class="list-group-item">
            <span class="badge"><?php echo $commentcount;?></span>
            <a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
          </li>
          <?php }?>
          <?php }?>

        </ul>

                              </div>

                              <div role="tabpanel" class="tab-pane" id="messages">

                                <ul class="list-group">


                                      <?php if (function_exists('get_most_viewed_category')): ?>
                                      <?php get_most_viewed_category(7,'both',5); ?>
                                      <?php endif; ?>

                                </ul>

                              </div>

                 <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo_ss.png" class="img-responsive center-block " /></a>

                            </div> <!-- FINAL tab-content -->

                        </div><!-- FINAL Itens DESTAQUES -->

                     </div> <!-- FINAL ROW -->

                  </div> <!-- FINAL CONTAINER -->



                                                       <!-- width-full-box -->

  <div class="width-full-box">
    <div class="container">

                <div class="row">
                    <div class="title-box">
                       <div class="col-md-9"><h4>Notícias</h4></div>
                       <div class="col-md-3 entrevista visible-lg"><h4>Entrevistas</h4></div>
                     </div>
                </div>

      <div class="row">

                              <!--/ BOX Noticias -->

                            <?php
                              $posts_slides =  new WP_Query(array(
                                'category_name' => 'noticias',
                                'posts_per_page' => 3
                                ));

                                while($posts_slides->have_posts()) : $posts_slides->the_post();
                            ?>


            <div class="col-md-3 item-noticias">
            <a href="<?php the_permalink(); ?> "> <?php the_post_thumbnail('img-noticias', array('class' => 'img-responsive center-block')); ?> </a>
                 <span><?php echo rwmb_meta('subtitulo'); ?></span>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </div>

                     <?php endwhile; wp_reset_postdata(); ?>

                              <!--/ FIM BOX Noticias -->


                              <!--/ BOX entrevista -->

                            <?php
                              $posts_slides =  new WP_Query(array(
                                'category_name' => 'entrevistas',
                                'posts_per_page' => 1
                                ));

                                while($posts_slides->have_posts()) : $posts_slides->the_post();
                            ?>

            <div class="col-md-3 item-noticias entrevista pull-right">
               <div class="title-box visible-xs"><h4>Entrevistas</h4></div>
          <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail('img-noticias', array('class' => 'img-responsive center-block')); ?></a>
              <span><?php echo rwmb_meta('subtitulo'); ?></span>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </div>

             <?php endwhile; wp_reset_postdata(); ?>

                            <!--/ FIM BOX entrevista -->

      </div> <!-- FIM ROW acima do box noticias-->
   </div><!-- FIM CONTAINER-->
 </div><!-- FIM full box-->


                    <div class="container">

                      <div class="row">

                            <div class="title-box">
                              <div class="col-md-7"><h4>Projetos Sociais</h4></div>
                              <div class="col-md-5 visible-lg"><h4>Vídeos</h4></div>
                            </div>

                      </div>
                            <div class="row">
                              <div class="col-md-7" id="post-psocial" >

                              <!-- post-psocial-->

                             <?php
                              $posts_slides =  new WP_Query(array(
                                'category_name' => 'projetos-sociais',
                                'posts_per_page' => 2
                                ));

                                while($posts_slides->have_posts()) : $posts_slides->the_post();
                            ?>

                                  <div class="media">
                                    <div class="media-left">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-psocial', array('class' => 'media-object img-responsive img-thumbnail')); ?></a>
                                  </div>
                                    <div class="media-body">
                                      <h1 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                      <p class="visible-lg"><?php echo rwmb_meta('resumo'); ?></p>
                                    </div>
                                  </div>

                                  <?php endwhile; wp_reset_postdata(); ?>

                              </div>

                             <!-- fim post-psocial-->

                                <!-- Videos-->

                              <div class="col-md-5" id="videos" >
                              <div class="title-box visible-xs"><h4>Videos</h4></div>

                             <?php
                              $posts_slides =  new WP_Query(array(
                                'category_name' => 'videos',
                                'posts_per_page' => 1
                                ));

                                while($posts_slides->have_posts()) : $posts_slides->the_post();
                            ?>

                                  <!-- 16:9 aspect ratio -->
                                  <div class="embed-responsive embed-responsive-16by9">

                                  <?php echo rwmb_meta('oembed','type=oembed'); ?>

                                  </div>

                                  <?php endwhile; wp_reset_postdata(); ?>

                              </div>

                              <!-- fim Videos-->


                            </div>
                    </div>
                    <!-- Fim container-->

                    <div class=" container apoio">

                          <div class="row">
                            <div class="col-xs-9 col-md-3">
                              <a href="#" class="thumbnail">
                                <img src="http://placehold.it/360x170" class="img-responsive" alt="" title="" >
                              </a>
                            </div>

                            <div class="col-xs-9 col-md-3">
                              <a href="#" class="thumbnail">
                                <img src="http://placehold.it/360x170" class="img-responsive" alt="" title="" >
                              </a>
                            </div>

                            <div class="col-xs-9 col-md-3">
                              <a href="#" class="thumbnail">
                                <img src="http://placehold.it/360x170" class="img-responsive" alt="" title="" >
                              </a>
                            </div>

                            <div class="col-xs-9 col-md-3">
                              <a href="#" class="thumbnail">
                                <img src="http://placehold.it/360x170" class="img-responsive" alt="" title="" >
                              </a>
                            </div>

                          </div>

                      </div> <!-- Fim container apoio-->

                      <div class="container">
                          <div class="row">
                                <div class="title-box">
                              <div class="col-md-7 "><h4>Inspire-se</h4>

        <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>

          <!-- Inspire-se -->
          <div class="carousel-inner" role="listbox">

            <?php
              $posts_slides =  new WP_Query(array(
                'category_name' => 'inspire',
                'posts_per_page' => 5
                ));
                $i = 1;
                while($posts_slides->have_posts()) : $posts_slides->the_post();
            ?>

              <div class="item <?php if($i == 1) echo 'active';?>">
       <a href=""> <?php the_post_thumbnail('thumbnail-slide'); ?> </a>
                <div class="carousel-caption banner2">
                  <h5><?php the_title(); ?></h5>
                  <span><?php echo rwmb_meta('subtitulo'); ?></span>
                </div>
              </div>
             <?php $i++; endwhile; wp_reset_postdata(); ?>

          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


                              </div>
                              <div class="col-md-5"><h4>Instagram</h4></div>
                          </div>
                                </div>
                      </div>

       <div class="width-maquina">

            <div class="container">

              <div class="row">
                  <div class="title-box">
                  <div class="col-md-12"><h4>NOSSA MÁQUINA</h4></div>
                  </div>
              </div>

 <div class="row">

                            <?php
                              $posts_slides =  new WP_Query(array(
                                'category_name' => 'nossa-maquina',
                                'posts_per_page' => 4
                                ));

                                while($posts_slides->have_posts()) : $posts_slides->the_post();
                            ?>

  <div class="col-md-3 nutri-maqui">
    <div class="thumbnail-color">
       <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('img-maquina', array('class' => 'media-object img-responsive')); ?> </a>
      <div class="caption">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php echo rwmb_meta('resumo'); ?></p>
      </div>
    </div>
  </div>

                     <?php endwhile; wp_reset_postdata(); ?>



 </div> <!-- /Fim ROW-->
            </div> <!-- /Fim container-->

       </div>  <!-- /Fim width-maquina-->



<?php get_footer(); ?>
