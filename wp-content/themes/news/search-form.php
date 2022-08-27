<form method="get" class="search-overlay-form" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<label for="s" class="assistive-text"><?php _e('Search');?></label>
	<input type="text" class="field input-search" name="s" id="s" autofocus placeholder="<?php esc_attr_e('Search');?>" />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('Search');?>" />
</form>
