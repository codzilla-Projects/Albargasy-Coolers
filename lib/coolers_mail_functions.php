<?php 
function coolers_res_fromemail($email) {
$coolersfrom = get_option( 'admin_email' );

return $coolersfrom;
}

function coolers_res_fromname($email){
$coolersfrom = get_option('blogname');
return $coolersfrom;
}

add_filter('wp_mail_from', 'coolers_res_fromemail');
add_filter('wp_mail_from_name', 'coolers_res_fromname');


/*************************************************************
    coolers register new Programs request homepage form 1
************************************************************/
function coolers_register_new_programs($post_data){
    
  $fullname           = trim(stripcslashes(htmlspecialchars($post_data['fullname'])));
	$email            = sanitize_email($post_data['email']);
	$phone            = sanitize_text_field($post_data['phone']);
	$governorate      = sanitize_text_field($post_data['governorate']);
	$programs         = $post_data['programs'];
	$send_news        = sanitize_text_field($post_data['send_news']);
	$new_pograms      = implode("  ,  ", $programs);
	if($send_news == null){
		$send_news = 'DisAgree';
	};
    
    /** Form Validation **/
    if ( empty( $fullname ) || empty( $email )  || empty( $phone ) || empty( $governorate ) || empty( $new_pograms )  ){
        $errors[] =  __('Required form field is missing','coolers');
	}

  if( empty($fullname) )
    $errors[] = '<strong>Error : </strong>First name is required .';

  if( empty($email) )
    $errors[] = '<strong>Error : </strong>Email is required .';

    if( empty($phone) )
    $errors[] = '<strong>Error : </strong>Phone is required .';

    if( empty($governorate) )
    $errors[] = '<strong>Error : </strong>Governorate is required .';

    if( empty($new_pograms) )
    $errors[] = '<strong>Error : </strong>Programs is required .';


  
  if( empty($errors) ){
      
    global $wp_queries, $charset_collate;
    global  $wpdb;
     
    $table_name = $wpdb->prefix . "parners_requests";
   
        $my_Query = $wpdb->insert($table_name,array(
          'first_name'       => $fullname,
          'email'            => $email,
          'phone'            => $phone,
          'governorate'      => $governorate,
          'programs'         => $new_pograms,
          'send_news'        => $send_news,
        ));

      
      $response = array(
        'status' => 1 
      );  
     $admin_mail = get_option( 'admin_email' );

      send_new_register_request_email( $admin_mail ,$fullname , $email , $phone , $governorate , $new_pograms , $send_news );
  }else{
      $response = array(
        'status' => 0 ,
        'msg'    => $errors 
      );    
    }
  return $response;
}


function  send_new_register_request_email( $admin_mail ,$fullname , $email , $phone , $governorate , $new_pograms, $send_news){
	$to = get_option('partner_form_email');
	$subject = 'coolers - New Programs request';
	$body = '
		<html>
			<head>
    			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			</head>
			<body>
			    <table style="font-family: Verdana,sans-serif; font-size: 13px; color: #374953; width: 600px;margin: auto;border: 1px solid #967caf;padding: 70px 30px; direction: ltr;">
			      <tr>
			        <td align="center"><a href="'.coolers_BlogUrl.'" title="coolers"><img src="'.get_option('coolers_header_logo_img').'" alt="coolers Logo" style="width: 200px;display: block;margin: auto;" ></a></td>
			      </tr>
			      <tr>
			        <td>&nbsp;</td>
			      </tr>
			      <tr>
			        <td><h2 style="background-color: #333; color:#FFF; font-weight: bold; padding: 1em 1em;text-align:center">New Email Received</h2></td>
			      </tr>
			      <tr>
			        <td>&nbsp;</td>
			      </tr>
			      <tr>
			        <td align="center"><h3>Hello Admin,</h3></td>
			      </tr>
			      <tr>
			        <td><p>Congratulations , You\'ve recieved a new Email request on your website <br>Please access your dashboard to check this request.</p></td>
			      </tr>
			      <tr>
			        <td>&nbsp;</td>
			      </tr>
            <tr>
			        <td> 
                  <p> First name: '. $fullname .'</p>
                  <p> Email: '. $email .'</p>
                  <p> Phone: '. $phone .'</p>
                  <p> Governorate: '. $governorate .'</p>
                  <p> Program: '. $new_pograms .'</p>
                  <p> Receive updates/subscribe to newsletter :'.$send_news.'</p>
              </td>
			      </tr>
            <tr>
			        <td>&nbsp;</td>
			      </tr>
			      <tr>
			        <td align="center" style="font-size: 15px;border-top: 1px solid #967caf;padding: 10px;">
			            <p><i>Thank you!</i><br/><b>German Sustainability Academy.</b></p>
			        </td>
			      </tr>
			    </table>
			</body>
		</html>';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'From: info@coolers.com' . "\r\n";
    wp_mail( $to, $subject, $body, $headers );
}

/****************************************************************************************************************/
/*************************************************************
    coolers register new Programs request homepage form 1
************************************************************/
function coolers_register_new_purchase($post_data){
    
  $fullname         = trim(stripcslashes(htmlspecialchars($post_data['fullname'])));
	$email            = sanitize_email($post_data['email']);
	$phone            = sanitize_text_field($post_data['phone']);
	$governorate      = sanitize_text_field($post_data['governorate']);
	$organization     = sanitize_text_field($post_data['organization']);
	$job_title        = sanitize_text_field($post_data['job_title']);
	$programs         = $post_data['programs'];
	$industry         = sanitize_text_field($post_data['industry']);
	$send_news        = sanitize_text_field($post_data['send_news']);
	$new_pograms      = implode("  ,  ", $programs);
		if($send_news == null){
		$send_news = 'DisAgree';
	};
    
    /** Form Validation **/
    if ( empty( $fullname ) || empty( $email )  || empty( $phone ) || empty( $governorate ) || empty( $organization) || empty( $job_title )  || empty( $new_pograms )  || empty( $industry ) ){
        $errors[] =  __('Required form field is missing','coolers');
	}

  if( empty($fullname) )
    $errors[] = '<strong>Error : </strong>First name is required .';


  if( empty($email) )
    $errors[] = '<strong>Error : </strong>Email is required .';

    if( empty($phone) )
    $errors[] = '<strong>Error : </strong>Phone is required .';

   if( empty($organization) )
    $errors[] = '<strong>Error : </strong>Organization is required .';

   if( empty($job_title) )
    $errors[] = '<strong>Error : </strong>Job Title is required .';

    if( empty($governorate) )
    $errors[] = '<strong>Error : </strong>Governorate is required .';

    if( empty($new_pograms) )
    $errors[] = '<strong>Error : </strong>Programs is required .';

  	if( empty($industry) )
    $errors[] = '<strong>Error : </strong>Industry is required .';

  
  if( empty($errors) ){
      
    global $wp_queries, $charset_collate;
    global  $wpdb;
     
    $table_name = $wpdb->prefix . "parners_requests";
   
        $my_Query = $wpdb->insert($table_name,array(
          'first_name'       => $fullname,
          'email'            => $email,
          'phone'            => $phone,
          'organization'     => $organization,
	      'job_title'        => $job_title,
          'governorate'      => $governorate,
          'programs'         => $new_pograms,
          'industry'         => $industry,
          'send_news'        => $send_news,
        ));

      
      $response = array(
        'status' => 1 
      );  
     $admin_mail = get_option( 'admin_email' );

      send_new_register_purchase_email( $admin_mail ,$fullname , $email , $phone , $organization, $job_title,
 $governorate , $new_pograms, $industry, $send_news );
  }else{
      $response = array(
        'status' => 0 ,
        'msg'    => $errors 
      );    
    }
  return $response;
}


function  send_new_register_purchase_email( $admin_mail ,$fullname , $email , $phone , $organization, $job_title,
 $governorate , $new_pograms, $industry, $send_news ){
	$to = get_option('purchase_form_email');
	$subject = 'coolers - New Programs request';
	$body = '
		<html>
			<head>
    			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			</head>
			<body>
			    <table style="font-family: Verdana,sans-serif; font-size: 13px; color: #374953; width: 600px;margin: auto;border: 1px solid #967caf;padding: 70px 30px; direction: ltr;">
			      <tr>
			        <td align="center"><a href="'.coolers_BlogUrl.'" title="coolers"><img src="'.get_option('coolers_header_logo_img').'" alt="coolers Logo" style="width: 200px;display: block;margin: auto;" ></a></td>
			      </tr>
			      <tr>
			        <td>&nbsp;</td>
			      </tr>
			      <tr>
			        <td><h2 style="background-color: #333; color:#FFF; font-weight: bold; padding: 1em 1em;text-align:center">New Email Received</h2></td>
			      </tr>
			      <tr>
			        <td>&nbsp;</td>
			      </tr>
			      <tr>
			        <td align="center"><h3>Hello Admin,</h3></td>
			      </tr>
			      <tr>
			        <td><p>Congratulations , You\'ve recieved a new Email request on your website <br>Please access your dashboard to check this request.</p></td>
			      </tr>
			      <tr>
			        <td>&nbsp;</td>
			      </tr>
            <tr>
			        <td> 
                  <p> First name: '. $fullname .'</p>
                  <p> Email: '. $email .'</p>
                  <p> Phone: '. $phone .'</p>
                  <p> Organization: '. $organization .'</p>
                  <p> Job Title: '. $job_title .'</p>
                  <p> Governorate: '. $governorate .'</p>
                  <p> Program: '. $new_pograms .'</p>
                  <p> Industry: '. $industry .'</p>
                  <p> Receive updates/subscribe to newsletter :'.$send_news.'</p>
              </td>
			      </tr>
            <tr>
			        <td>&nbsp;</td>
			      </tr>
			      <tr>
			        <td align="center" style="font-size: 15px;border-top: 1px solid #967caf;padding: 10px;">
			            <p><i>Thank you!</i><br/><b>German Sustainability Academy.</b></p>
			        </td>
			      </tr>
			    </table>
			</body>
		</html>';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'From: info@coolers-sa.com' . "\r\n";
    wp_mail( $to, $subject, $body, $headers );
}