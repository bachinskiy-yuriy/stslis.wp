<form id="searchform" class="searchform" method="get" action="<?php echo get_home_url(); ?>">
    <p class="clearfix default_searchform">
        <input type="text" name="s" 
        	onblur="if (this.value == '') {this.value = '<?php _e('Знайти','graphene'); ?>';}" 
            onfocus="if (this.value == '<?php _e('Знайти','graphene'); ?>') {this.value = '';}" 
            value="<?php if ( $term = get_search_query() ) echo esc_attr( $term ); else _e( 'Знайти', 'graphene' ); ?>" />
        <button type="submit"><span><?php _e('Пошук', 'graphene'); ?></span></button>
    </p>
    <?php do_action('graphene_search_form'); ?>
</form>