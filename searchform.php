<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field"
        placeholder="<?php echo esc_attr_x( 'Search …', 'wpajax' ) ?>"
        value="<?php echo get_search_query() ?>" name="s"
        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

    <span class="search-submit-wrap">
		<button type="submit" class="search-submit">
		  <i class="icon-search fa fa-search"></i>
		</button>
    </span>
</form>