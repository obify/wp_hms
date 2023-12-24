<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="row">  
        <div class="col-md-9 col-sm-9">  
            <input type="text" class="form-control" name="s" placeholder="Enter search term..." value="<?php echo get_search_query(); ?>">
            <!--<input type="hidden" name="post_type[]" value="post" />-->
            <input type="hidden" name="post_type[]" value="doctor" />
            <input type="hidden" name="post_type[]" value="property" />
        </div>
        <div class="col-md-3 col-sm-3">
            <button class="btn btn-outline-info text-white w-25" type="submit"> 
                <i class="fas fa-search fs-5"></i> 
            </button>
        </div>
    </div>
</form>