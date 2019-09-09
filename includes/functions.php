<?php
function custom_ajax_call() {
  check_ajax_referer( 'my-special-string', 'tokan' );

  $info['user_login']=$_POST['username'];
  $info['user_password']=$_POST['password'];

  $user_signon = wp_signon($info, false);
 
  if(is_wp_error($user_signon)){
    // echo get_wp_error();        
    $user_signon->get_error_message();
    echo json_encode(array("status" => '0',"msg"=>$user_signon->get_error_message()));
}else{
    echo json_encode(array("status" => '1',"msg"=>"Successfully Login","url"=>home_url('/')));

} 

wp_die();
}
add_action( 'wp_ajax_custom_ajax_call', 'custom_ajax_call' );
add_action( 'wp_ajax_nopriv_custom_ajax_call', 'custom_ajax_call' );


function reg_ajax_call() {

  check_ajax_referer( 'my-special-string', 'tokan' );

  $userdata=array(
    'user_login'=> $_POST['name'],
    'user_email'=> $_POST['email'],
     'user_pass'=> $_POST['password'],
);
  
  if($_POST['password'] == $_POST['cpassword']){

  $user_id=wp_insert_user($userdata);
  // echo $user_id;

  if(!is_wp_error($user_id)){
    // echo get_wp_error();        
    update_user_meta($user_id,'mobile',$_POST['mobile']);
    update_user_meta($user_id,'address',$_POST['address']);
    update_user_meta($user_id,'role','customer');


    echo json_encode(array("status" => '1',"msg"=>"Successfully Registered"));
}else{
    echo json_encode(array("status" => '0',"msg"=>$user_id->get_error_message()));

} 
}else{
     echo json_encode(array("status" => '0',"msg"=>"Password Are Not match"));
}
wp_die();
}
add_action( 'wp_ajax_reg_ajax_call', 'reg_ajax_call' );
add_action( 'wp_ajax_nopriv_reg_ajax_call', 'reg_ajax_call' );



?>