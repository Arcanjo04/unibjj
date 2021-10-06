<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    
      <form class="navbar-form " role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		  
		        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		        <input type="text" class="form-control" placeholder="Digite sua pesquisa" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		        <input type="submit" class="btn btn-default" id="searchsubmit"
		            value="<?php echo esc_attr_x( 'OSS', 'submit button' ); ?>" />
		  
      </form>
   
  </div>
</div>



                       