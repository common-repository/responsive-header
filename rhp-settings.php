<?php
// create custom plugin settings menu
add_action('admin_menu', 'rhp_text_menu');
function rhp_text_menu() {
//create new top-level menu
add_menu_page('Responsive Header Plugin Settings', 'Responsive Header', 'manage_options',__FILE__, 'rhp_settings_page',plugins_url('/images/document.png', __FILE__) );
}
add_action('wp_footer','rhp_responsify');
add_action( 'admin_init', 'rhp_register_settings' );
function rhp_register_settings() {
//FOR PRE-DEFINED HEADER TAGS
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_h1' );		//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_h1' );		//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_h1' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_h2' );		//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_h2' );		//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_h2' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_h3' );		//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_h3' );		//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_h3' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_h4' );		//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_h4' );		//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_h4' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_h5' );		//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_h5' );		//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_h5' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_h6' );		//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_h6' );		//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_h6' );	//register text compressor
//FOR CUSTOM CLASSES
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust1' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust1' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust1' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust1' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust2' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust2' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust2' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust2' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust3' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust3' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust3' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust3' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust4' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust4' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust4' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust4' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust5' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust5' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust5' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust5' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust6' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust6' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust6' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust6' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust7' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust7' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust7' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust7' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust8' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust8' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust8' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust8' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust9' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust9' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust9' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust9' );	//register text compressor
	register_setting( 'rhp_settings_group', 'insert_rh_class_cust1' );		//register text id/class
	register_setting( 'rhp_settings_group', 'insert_rh_minfont_cust10' );	//register text minfont
	register_setting( 'rhp_settings_group', 'insert_rh_maxfont_cust10' );	//register text maxfont
	register_setting( 'rhp_settings_group', 'insert_rh_compressor_cust10' );	//register text compressor
}
function rhp_settings_page(){
?>
<style>
.wrap p {
  box-sizing: border-box;
  display: inline-block;
  padding: 0 10px;
  vertical-align: top;
}
.donation.link {
  position: absolute;
  right: 0;
  top: 2%;
}
</style>
<div class="wrap">
<h1>Responsive Header Plugin Settings</h1>
<h3>Make your Header Tags Responsive</h3> 
<br/>
<form method="POST" action="options.php">
    <?php settings_fields( 'rhp_settings_group' ); ?>
    <?php do_settings_sections( 'rhp_settings_group' ); ?>
<div class="rhp-notes">
<strong>Min Font-Size - Set the minimum font size for your text<br/>
		Max Font-Size - Set the maximum font size for your text<br/>
		Compressor - Set the value for the text resize aggressiveness, place 1 for default value, e.g., 0.8 <em>(resizes less aggressively)</em> / 1.2 <em>(resizes more aggressively)</em></strong>
</div>
<br/><br/>
<!--PRE-DEFINED HEADER TAGS-->
<h3>Customize Responsiveness of your Header Tags</h3>
	<strong>H1</strong><br/>
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_h1" value="<?php echo get_option('insert_rh_minfont_h1'); ?>" pattern="\d+" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_h1" value="<?php echo get_option('insert_rh_maxfont_h1'); ?>" pattern="\d+" maxlength="3"/></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_h1" value="<?php echo get_option('insert_rh_compressor_h1'); ?>" maxlength="3" /></p>
	<br/>
	<strong>H2</strong><br/>
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_h2" value="<?php echo get_option('insert_rh_minfont_h2'); ?>" pattern="\d+" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_h2" value="<?php echo get_option('insert_rh_maxfont_h2'); ?>" pattern="\d+" maxlength="3"/></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_h2" value="<?php echo get_option('insert_rh_compressor_h2'); ?>" maxlength="3" /></p>
	<br/>
	<strong>H3</strong><br/>
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_h3" value="<?php echo get_option('insert_rh_minfont_h3'); ?>" pattern="\d+" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_h3" value="<?php echo get_option('insert_rh_maxfont_h3'); ?>" pattern="\d+" maxlength="3"/></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_h3" value="<?php echo get_option('insert_rh_compressor_h3'); ?>" maxlength="3" /></p>
	<br/>
	<strong>H4</strong><br/>
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_h4" value="<?php echo get_option('insert_rh_minfont_h4'); ?>" pattern="\d+" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_h4" value="<?php echo get_option('insert_rh_maxfont_h4'); ?>" pattern="\d+" maxlength="3"/></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_h4" value="<?php echo get_option('insert_rh_compressor_h4'); ?>" maxlength="3" /></p>
	<br/>
	<strong>H5</strong><br/>
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_h5" value="<?php echo get_option('insert_rh_minfont_h5'); ?>" pattern="\d+" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_h5" value="<?php echo get_option('insert_rh_maxfont_h5'); ?>" pattern="\d+" maxlength="3"/></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_h5" value="<?php echo get_option('insert_rh_compressor_h5'); ?>" maxlength="3" /></p>
	<br/>
	<strong>H6</strong><br/>
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_h6" value="<?php echo get_option('insert_rh_minfont_h6'); ?>" pattern="\d+" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_h6" value="<?php echo get_option('insert_rh_maxfont_h6'); ?>" pattern="\d+" maxlength="3"/></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_h6" value="<?php echo get_option('insert_rh_compressor_h6'); ?>" maxlength="3" /></p>
	<br/>

<!--ADDING CUSTOM TAGS-->
<h3>Add Custom Header Tags</h3>
<strong>ID/Class: place here the html tag, css ID or class of the text, e.g., .yourheadertag, .content h1, #headertitle.</strong><br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust1" value="<?php echo get_option('insert_rh_class_cust1'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust1" value="<?php echo get_option('insert_rh_minfont_cust1'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust1" value="<?php echo get_option('insert_rh_maxfont_cust1'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust1" value="<?php echo get_option('insert_rh_compressor_cust1'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust2" value="<?php echo get_option('insert_rh_class_cust2'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust2" value="<?php echo get_option('insert_rh_minfont_cust2'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust2" value="<?php echo get_option('insert_rh_maxfont_cust2'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust2" value="<?php echo get_option('insert_rh_compressor_cust2'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust3" value="<?php echo get_option('insert_rh_class_cust3'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust3" value="<?php echo get_option('insert_rh_minfont_cust31'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust3" value="<?php echo get_option('insert_rh_maxfont_cust3'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust3" value="<?php echo get_option('insert_rh_compressor_cust3'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust4" value="<?php echo get_option('insert_rh_class_cust4'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust4" value="<?php echo get_option('insert_rh_minfont_cust4'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust4" value="<?php echo get_option('insert_rh_maxfont_cust4'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust4" value="<?php echo get_option('insert_rh_compressor_cust4'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust5" value="<?php echo get_option('insert_rh_class_cust5'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust5" value="<?php echo get_option('insert_rh_minfont_cust5'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust5" value="<?php echo get_option('insert_rh_maxfont_cust5'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust5" value="<?php echo get_option('insert_rh_compressor_cust5'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust6" value="<?php echo get_option('insert_rh_class_cust6'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust6" value="<?php echo get_option('insert_rh_minfont_cust6'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust6" value="<?php echo get_option('insert_rh_maxfont_cust6'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust6" value="<?php echo get_option('insert_rh_compressor_cust6'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust7" value="<?php echo get_option('insert_rh_class_cust7'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust7" value="<?php echo get_option('insert_rh_minfont_cust7'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust7" value="<?php echo get_option('insert_rh_maxfont_cust7'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust7" value="<?php echo get_option('insert_rh_compressor_cust7'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust8" value="<?php echo get_option('insert_rh_class_cust8'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust8" value="<?php echo get_option('insert_rh_minfont_cust8'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust8" value="<?php echo get_option('insert_rh_maxfont_cust8'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust8" value="<?php echo get_option('insert_rh_compressor_cust8'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust9" value="<?php echo get_option('insert_rh_class_cust9'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust9" value="<?php echo get_option('insert_rh_minfont_cust9'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust9" value="<?php echo get_option('insert_rh_maxfont_cust9'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust9" value="<?php echo get_option('insert_rh_compressor_cust9'); ?>" maxlength="3" /></p>
	<br/>
	<p><span class="rhp-label">ID/Class:</span><input type="text" name="insert_rh_class_cust10" value="<?php echo get_option('insert_rh_class_cust10'); ?>" /></p>	
	<p><span class="rhp-label">Min Font-Size:</span><input type="text" name="insert_rh_minfont_cust10" value="<?php echo get_option('insert_rh_minfont_cust10'); ?>" maxlength="3" /></p>	
	<p><span class="rhp-label">Max Font-Size:</span><input type="text" name="insert_rh_maxfont_cust10" value="<?php echo get_option('insert_rh_maxfont_cust10'); ?>" maxlength="3" /></p>
	<p><span class="rhp-label">Compressor:</span><input type="text" name="insert_rh_compressor_cust10" value="<?php echo get_option('insert_rh_compressor_cust10'); ?>" maxlength="3" /></p>
	<br/>
		<input type="submit" name="save_data" value="Save" class="button-primary" />
<div class="donation link"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="CRZG8KXL8BPLL">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</form>
</div>
<?php
}
?>