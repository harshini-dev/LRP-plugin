<?php
add_action('wp_enqueue_scripts','LRP_add_styles');
function LRP_add_styles(){
	wp_enqueue_style('LRP-style',plugins_url('assets/css/style.css',__FILE__),'','1.0');
	wp_enqueue_script('LRP-custom',plugins_url('assets/js/custom.js',__FILE__),'','1.0',true);

	wp_localize_script( 'LRP-custom', 'MyAjax', array(
    // URL to wp-admin/admin-ajax.php to process the request
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    // generate a nonce with a unique ID "myajax-post-comment-nonce"
    // so that you can check it later when an AJAX request is sent
    'security' => wp_create_nonce( 'my-special-string' )
  ));
}

?>