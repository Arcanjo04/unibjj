<?php get_header(); ?>
              
                <div class="container conteudo-categoria">

                            <div class="row">  

                            <h4><?php single_cat_title(' OSS... '); ?></h4>

                              <div class="col-md-7" id="post-psocial" >  

                              <!-- CATEGORIAS-->

                             <?php if(have_posts()) : while(have_posts()) : the_post(); ?>                             
                                  
                                  <div class="media">
                                    <div class="media-left">
                      <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail('img-psocial', array('class' => 'media-object img-responsive img-thumbnail')); ?></a>
                                  </div>
                                    <div class="media-body">
                                      <h1 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                      <p class="visible-lg"><?php echo rwmb_meta('resumo'); ?></p>
                                    </div>
                                  </div>

                              <?php endwhile; else: ?>
                              <?php endif; ?>
                                                                
                              </div>

                             <!-- fim CATEGORIAS-->

                                    
              <?php get_sidebar(); ?>


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
                                                                                   
                      </div>

                    </div>

                 </div>
             
<?php get_footer(); ?>


