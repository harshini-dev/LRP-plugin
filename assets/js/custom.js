jQuery(function() {

  jQuery("#submit_button").on("click",function(){

    var count = 0;
    var username = jQuery('#username').val();
    var password = jQuery('#password').val();
    if(jQuery.trim(username)==''){
        jQuery('#username_error').text('This field is Required.');
        count++;
    }
    else{ 
        jQuery('#username_error').text('');
    }
    if(jQuery.trim(password)==''){
        jQuery('#password_error').text('This field is Required.');
        count++;
    }
    else{
        jQuery('#password_error').text('');
    }
    
    if(count==0){
        var formdata = jQuery("#login").serialize();
        jQuery.ajax({
         type:"POST",
         url:MyAjax.ajaxurl,
         data:"action=custom_ajax_call&tokan="+MyAjax.security + '&'+formdata,
         dataType: "json",
         success:function(response){
            if(jQuery.trim(response.status)=='1'){
                jQuery('.error-msg').html('<div class="alert alert-success">'+response.msg+'</div>'); 
                setTimeout(function(){ location.href=response.url},3000);
            }else{
                jQuery('.error-msg').html('<div class="alert alert-danger">'+response.msg+'</div>'); 
            }
        }
    });
    }
});


  jQuery("#reg_button").on("click",function(){

    var count = 0;
    var username = jQuery('#name').val();
    var email = jQuery('#email').val();
    var mobile = jQuery('#mobile').val();
    var address = jQuery('#address').val();
    var password = jQuery('#password').val();
    var cpassword = jQuery('#cpassword').val();

    if(jQuery.trim(username)==''){
        jQuery('#name_error').text('This field is Required.');
        count++;
    }
    else{
        jQuery('#name_error').text('');
    }

    if(jQuery.trim(email)==''){
        jQuery('#email_error').text('This field is Required.');
        count++;
    }
    else{
        jQuery('#email_error').text('');
    }

    if(jQuery.trim(mobile)==''){
        jQuery('#mobile_error').text('This field is Required.');
        count++;
    }
    else{
        jQuery('#mobile_error').text('');
    }

    if(jQuery.trim(address)==''){
        jQuery('#address_error').text('This field is Required.');
        count++;
    }
    else{
        jQuery('#address_error').text('');
    }

    if(jQuery.trim(password)==''){
        jQuery('#password_error').text('This field is Required.');
        count++;
    }
    else{
        jQuery('#password_error').text('');
    }

    if(jQuery.trim(cpassword)==''){
        jQuery('#cpassword_error').text('This field is Required.');
        count++;
    }
    else{
        jQuery('#cpassword_error').text('');
    }

    if(count==0 ){
        var formdata1 = jQuery("#registration").serialize();
       // console.log(formdata);
       jQuery.ajax({

         type:"POST",
         url:MyAjax.ajaxurl,
         data:"action=reg_ajax_call&tokan="+MyAjax.security + '&'+formdata1,
         dataType: "json",
         success:function(response){
          if(jQuery.trim(response.status)=='1'){
           jQuery('.error-msg').html('<div class="alert alert-success">'+response.msg+'</div>'); 

       }else{
           jQuery('.error-msg').html('<div class="alert alert-danger">'+response.msg+'</div>'); 
       }
   }


});
   }
});

 jQuery(".form-group input").focus(function() {
    jQuery(this).siblings('label').css('top','5px');
    // jQuery(this).next("span").hide();
});
 jQuery(".form-group input").focusout(function() {
    jQuery(this).siblings('label').css('top','20px');
    // jQuery(this).next("span").hide();
});

});

