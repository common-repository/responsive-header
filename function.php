<?php
function rhp_responsify(){
//pre-defined headers
$rh_minfont_h1 = get_option('insert_rh_minfont_h1');
$rh_maxfont_h1 = get_option('insert_rh_maxfont_h1');
$rh_compressor_h1 = get_option('insert_rh_compressor_h1');
$rh_minfont_h2= get_option('insert_rh_minfont_h2');
$rh_maxfont_h2 = get_option('insert_rh_maxfont_h2');
$rh_compressor_h2 = get_option('insert_rh_compressor_h2');
$rh_minfont_h3 = get_option('insert_rh_minfont_h3');
$rh_maxfont_h3 = get_option('insert_rh_maxfont_h3');
$rh_compressor_h3 = get_option('insert_rh_compressor_h3');
$rh_minfont_h4 = get_option('insert_rh_minfont_h4');
$rh_maxfont_h4 = get_option('insert_rh_maxfont_h4');
$rh_compressor_h4 = get_option('insert_rh_compressor_h4');
$rh_minfont_h5 = get_option('insert_rh_minfont_h5');
$rh_maxfont_h5 = get_option('insert_rh_maxfont_h5');
$rh_compressor_h5 = get_option('insert_rh_compressor_h5');
$rh_minfont_h6 = get_option('insert_rh_minfont_h6');
$rh_maxfont_h6 = get_option('insert_rh_maxfont_h6');
$rh_compressor_h6 = get_option('insert_rh_compressor_h6');
//custom classes
$rh_class_cust1 = get_option('insert_rh_class_cust1');
$rh_minfont_cust1 = get_option('insert_rh_minfont_cust1');
$rh_maxfont_cust1 = get_option('insert_rh_maxfont_cust1');
$rh_compressor_cust1 = get_option('insert_rh_compressor_cust1');
$rh_class_cust2 = get_option('insert_rh_class_cust2');
$rh_minfont_cust2 = get_option('insert_rh_minfont_cust2');
$rh_maxfont_cust2 = get_option('insert_rh_maxfont_cust2');
$rh_compressor_cust2 = get_option('insert_rh_compressor_cust2');
$rh_class_cust3 = get_option('insert_rh_class_cust3');
$rh_minfont_cust3 = get_option('insert_rh_minfont_cust3');
$rh_maxfont_cust3 = get_option('insert_rh_maxfont_cust3');
$rh_compressor_cust3 = get_option('insert_rh_compressor_cust3');
$rh_class_cust4 = get_option('insert_rh_class_cust4');
$rh_minfont_cust4 = get_option('insert_rh_minfont_cust4');
$rh_maxfont_cust4 = get_option('insert_rh_maxfont_cust4');
$rh_compressor_cust4 = get_option('insert_rh_compressor_cust4');
$rh_class_cust5 = get_option('insert_rh_class_cust5');
$rh_minfont_cust5 = get_option('insert_rh_minfont_cust5');
$rh_maxfont_cust5 = get_option('insert_rh_maxfont_cust5');
$rh_compressor_cust5 = get_option('insert_rh_compressor_cust5');
$rh_class_cust6 = get_option('insert_rh_class_cust6');
$rh_minfont_cust6 = get_option('insert_rh_minfont_cust6');
$rh_maxfont_cust6 = get_option('insert_rh_maxfont_cust6');
$rh_compressor_cust6 = get_option('insert_rh_compressor_cust6');
$rh_class_cust7 = get_option('insert_rh_class_cust7');
$rh_minfont_cust7 = get_option('insert_rh_minfont_cust7');
$rh_maxfont_cust7 = get_option('insert_rh_maxfont_cust7');
$rh_compressor_cust7 = get_option('insert_rh_compressor_cust7');
$rh_class_cust8 = get_option('insert_rh_class_cust8');
$rh_minfont_cust8 = get_option('insert_rh_minfont_cust8');
$rh_maxfont_cust8 = get_option('insert_rh_maxfont_cust8');
$rh_compressor_cust8 = get_option('insert_rh_compressor_cust8');
$rh_class_cust9 = get_option('insert_rh_class_cust9');
$rh_minfont_cust9 = get_option('insert_rh_minfont_cust9');
$rh_maxfont_cust9 = get_option('insert_rh_maxfont_cust9');
$rh_compressor_cust9 = get_option('insert_rh_compressor_cust9');
$rh_class_cust10 = get_option('insert_rh_class_cust10');
$rh_minfont_cust10 = get_option('insert_rh_minfont_cust10');
$rh_maxfont_cust10 = get_option('insert_rh_maxfont_cust10');
$rh_compressor_cust10 = get_option('insert_rh_compressor_cust10');
?>
<script src="<?php bloginfo('url');?>/wp-content/plugins/responsive-header/js/jquery.fittext.js"></script>
<script> jQuery("h1").fitText(<?php echo $rh_compressor_h1 ?>, { minFontSize: '<?php echo $rh_minfont_h1 ?>', maxFontSize: '<?php echo $rh_maxfont_h1 ?>' })</script>
<script> jQuery("h2").fitText(<?php echo $rh_compressor_h2 ?>, { minFontSize: '<?php echo $rh_minfont_h2 ?>', maxFontSize: '<?php echo $rh_maxfont_h2 ?>' })</script>
<script> jQuery("h3").fitText(<?php echo $rh_compressor_h3 ?>, { minFontSize: '<?php echo $rh_minfont_h3 ?>', maxFontSize: '<?php echo $rh_maxfont_h3 ?>' })</script>
<script> jQuery("h4").fitText(<?php echo $rh_compressor_h4 ?>, { minFontSize: '<?php echo $rh_minfont_h4 ?>', maxFontSize: '<?php echo $rh_maxfont_h4 ?>' })</script>
<script> jQuery("h5").fitText(<?php echo $rh_compressor_h5 ?>, { minFontSize: '<?php echo $rh_minfont_h5 ?>', maxFontSize: '<?php echo $rh_maxfont_h5 ?>' })</script>
<script> jQuery("h6").fitText(<?php echo $rh_compressor_h6 ?>, { minFontSize: '<?php echo $rh_minfont_h6 ?>', maxFontSize: '<?php echo $rh_maxfont_h6 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust1 ?>").fitText(<?php echo $rh_compressor_cust1 ?>, { minFontSize: '<?php echo $rh_minfont_cust1 ?>', maxFontSize: '<?php echo $rh_maxfont_cust1 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust2 ?>").fitText(<?php echo $rh_compressor_cust2 ?>, { minFontSize: '<?php echo $rh_minfont_cust2 ?>', maxFontSize: '<?php echo $rh_maxfont_cust2 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust3 ?>").fitText(<?php echo $rh_compressor_cust3 ?>, { minFontSize: '<?php echo $rh_minfont_cust3 ?>', maxFontSize: '<?php echo $rh_maxfont_cust3 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust4 ?>").fitText(<?php echo $rh_compressor_cust4 ?>, { minFontSize: '<?php echo $rh_minfont_cust4 ?>', maxFontSize: '<?php echo $rh_maxfont_cust4 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust5 ?>").fitText(<?php echo $rh_compressor_cust5 ?>, { minFontSize: '<?php echo $rh_minfont_cust5 ?>', maxFontSize: '<?php echo $rh_maxfont_cust5 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust6 ?>").fitText(<?php echo $rh_compressor_cust6 ?>, { minFontSize: '<?php echo $rh_minfont_cust6 ?>', maxFontSize: '<?php echo $rh_maxfont_cust6 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust7 ?>").fitText(<?php echo $rh_compressor_cust7 ?>, { minFontSize: '<?php echo $rh_minfont_cust7 ?>', maxFontSize: '<?php echo $rh_maxfont_cust7 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust8 ?>").fitText(<?php echo $rh_compressor_cust8 ?>, { minFontSize: '<?php echo $rh_minfont_cust8 ?>', maxFontSize: '<?php echo $rh_maxfont_cust8 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust9 ?>").fitText(<?php echo $rh_compressor_cust9 ?>, { minFontSize: '<?php echo $rh_minfont_cust9 ?>', maxFontSize: '<?php echo $rh_maxfont_cust9 ?>' })</script>
<script> jQuery("<?php echo $rh_class_cust10 ?>").fitText(<?php echo $rh_compressor_cust10 ?>, { minFontSize: '<?php echo $rh_minfont_cust10 ?>', maxFontSize: '<?php echo $rh_maxfont_cust10 ?>' })</script>
<?php
}
?>