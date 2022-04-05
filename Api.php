<?php

require_once('wp-config.php');

global $wpdb;

$path = preg_replace('/wp-content.*$/', '', __DIR__);

include($path . 'wp-load.php');

// $api_name = $_GET['check_url'];
// $api_name == 'register' ? register(): '';
//   function register(){ 

//      global $wpdb; 
//         $dbTblName = $wpdb->prefix . "users";
//             date_default_timezone_set('America/Los_Angeles');
//             $date = date('Y-m-d h:i:s', time());
//       if (empty($_POST['signup_username'])) {
//             $status=101;
//             $datas = array('status'=>$status,'response'=>'false','error'=>'','msg'=>'Please Fill the Username');
//             echo json_encode($datas); 
//       }elseif (empty($_POST['signup_email'])) {
//             $status=101;
//             $datas = array('status'=>$status,'response'=>'false','error'=>'','msg'=>'Please Enter the Email');
//             echo json_encode($datas); 
//       }elseif (empty($_POST['password'])) {
//             $status=101;
//             $datas = array('status'=>$status,'response'=>'false','error'=>'','msg'=>'Please Fill the Password');
//             echo json_encode($datas); 
//       }elseif (empty($_POST['confirm_password'])) {
//             $status=101;
//             $datas = array('status'=>$status,'response'=>'false','error'=>'','msg'=>'Please Fill the Confirm Password');
//             echo json_encode($datas); 
//       }
//       elseif (empty($_POST['married_name'])) {
//             $status=101;
//             $datas = array('status'=>$status,'response'=>'false','error'=>'','msg'=>'Please enter the married name');
//             echo json_encode($datas); 
//       }
//       elseif (empty($_POST['age'])) {
//             $status=101;
//             $datas = array('status'=>$status,'response'=>'false','error'=>'','msg'=>'Please enter the age');
//             echo json_encode($datas); 
//       }
//       elseif (empty($_POST['marital_status'])) {
//             $status=101;
//             $datas = array('status '=>$status,'response'=>'false','error'=>'','msg'=>'Please enter the marital status');
//             echo json_encode($datas); 
//       }
//       else{

//       $email = $_POST['signup_email'];
//             $retrieve_data = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."users WHERE user_email= '" .$email ."'");
//             if(empty($retrieve_data)){
//                   $Caracteres = 'AbCDeFGhIJKLmoPQRSVXWyZ012456789';
//                   $QuantidadeCaracteres = strlen($Caracteres);
//                   $QuantidadeCaracteres--;
//                   $qtd = 32;
//                   $Hash=NULL;
//                   for($x=1;$x<=$qtd;$x++){
//                         $Posicao = rand(0,$QuantidadeCaracteres);
//                         $Hash .= substr($Caracteres,$Posicao,1);
//                   }

//                   $dbTblSignUp = $wpdb->prefix."signups";
//                         $signup_user=array( 
//                               'domain' => 'NULL',
//                               'path' => 'NULL',
//                               'title' => 'NULL', 
//                               'user_login' => $_POST['signup_username'],
//                               'user_email' => $email,
//                               'registered' =>  $date,
//                               'activated' => '',
//                               'active' => '0',
//                               'activation_key' =>  $Hash,
//                               'meta' =>  'NULL',
//                               'married_name' => $_POST['married_name'],
//                               'age' => $_POST['age'],
//                               'marital_status' => $_POST['marital_status'],

//                           );
//                           $wpdb->insert( $dbTblSignUp, $signup_user);

//                   $user_details=array( 
//                         'user_login' => $_POST['signup_username'],
//                         'user_nicename' => $_POST['signup_username'],
//                         'user_email' => $_POST['signup_email'], 
//                         'user_registered' => $date,
//                         'display_name' => $_POST['signup_username'],
//                         'user_pass' => wp_hash_password($_POST['signup_password']),
//                         // 'code' =  $_POST['user_activation_key']

//                     );
//                   //   echo json_encode($user_details);

//                   $wpdb->insert( $dbTblName, $user_details);
//                   $getLastInsertedId = $wpdb->insert_id; 

//                   $profile=array( 
//                         'field_1' => $_POST['field_1'],
//                         'field_34' => $_POST['field_34'],
//                         'field_35' => $_POST['field_35'], 
//                         'field_36' => $_POST['field_36'],
//                         'field_30' => $_POST['field_30'],
//                         'field_29' => $_POST['field_29'],
//                         'field_3' => $_POST['field_3'],
//                         'field_25' => $_POST['field_25'],
//                         'field_37' => $_POST['field_37'],
//                         'field_38' => $_POST['field_38'],
//                         'field_31' => $_POST['field_31'],
//                         'field_32' => $_POST['field_32']
//                   );

//               foreach($profile as $key=> $value){
//                   $profile_db = $wpdb->prefix . "bp_xprofile_data";
//                    $var =  explode("_",$key);
//                         $ketvalue= $var[1];
//                         $user_details=array( 
//                               'field_id' => $ketvalue,
//                               'user_id' => $getLastInsertedId,
//                               'value' => $value, 
//                               'last_updated' => $date,

//                           );
//                         $wpdb->insert( $profile_db, $user_details);

//             }

//             $body = '<div id=":xc" class="a3s aiL msg-8934180789862922769"><u></u>
//             <div width="100%" height="100%" bgcolor="#F7F3F0" style="Margin:0">
//             <table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#F7F3F0" style="border-collapse:collapse"><tbody><tr><td valign="top">
//                   <center style="width:100%">
//                         <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;font-family:sans-serif">  
//                         </div>
//                         <div style="max-width:600px"> 
//                               <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width:600px;border-top:7px solid #d84800" bgcolor="#F7F3F0">
//                                     <tbody><tr>
//                                           <td style="text-align:center;padding:15px 0;font-family:sans-serif;font-weight:bold;color:#000000;font-size:30px">
//                                                 Community Junction					</td>
//                                     </tr>
//                               </tbody></table>
//                               <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#FFFFFF" width="100%" style="max-width:600px;border-radius:5px"> 
//                                     <tbody><tr>
//                                           <td>
//                                                 <table cellspacing="0" cellpadding="0" border="0" width="100%">
//                                                   <tbody><tr>
//                                                             <td style="padding:20px;font-family:sans-serif;line-height:24px;color:#555555;font-size:15px">
//                                                                   <span style="font-weight:bold;font-size:20px">Hi '.$_POST['field_1'].',</span>
//                                                                   <hr color="#F7F3F0"><br>
//                                                                   <p>Thanks for registering!</p>
//             <p>To complete the activation of your account, go to the following link and click on the <strong>Activate</strong> button:<br>
//             <a style="color:#d84800" href="https://crushonmecrushonyou.com/activate/'.$Hash .'/"   target="_blank">https://crushonmecrushonyou.<wbr>com/activate/'.$Hash.'/</a></p>
//             <p>If the "Activation Key" field is empty, copy and paste the following into the field -'.$Hash.'</p>
//                                           </td>
//                                                   </tr>
//                                                 </tbody></table>
//                                           </td>
//                                     </tr>
//                               </tbody></table>
//                               <br>
//                               <table cellspacing="0" cellpadding="0" border="0" align="left" width="100%" style="max-width:600px;border-radius:5px" bgcolor="#F7F3F0">
//                                     <tbody><tr>
//                                           <td style="padding:20px;width:100%;font-size:12px;font-family:sans-serif;line-height:19px;text-align:left;color:#525252">

//                                                 <span>© 2022 Community Junction</span>
//                                                 <br><br>
//                                                 <a href="#" style="color:#d84800;text-decoration:underline" target="_blank" data-saferedirecturl="#">unsubscribe</a>
//                                           </td>
//                                     </tr>
//                               </tbody></table>      
//                         </div>
//                   </center>
//             </td></tr></tbody></table><div class="yj6qo"></div><div class="adL">
//             </div></div><div class="adL">
//             </div></div>';
//             $headers = "MIME-Version: 1.0" . "\r\n"; 
//             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//             $to =  $_POST['signup_email'];
//             $subject = "Verification Code";
//             $message = 'Verification Code';
//             $sent = wp_mail($to, $subject, $body, $headers);
//             $status=100;
//             $datas = array('status'=>$status,'response'=>'true','msg'=>'Please Check your Email to Verify the Account','error'=>'');
//             echo json_encode($datas);
//         }else{
//             $status=101;
//             $datas = array('status'=>$status,'response'=>'false','error'=>'','msg'=>'Email Already Registered');
//             echo json_encode($datas); 
//         }
//       }  
// }


$api_name = $_GET['check_url'];
$api_name == 'login' ? Login() : '';
function Login()
{
      global $wpdb;
      $email =  $_POST['email'];
      $pswd     =   md5($_POST['password']);
      if (!empty($email)) {
            $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users WHERE user_email= '" . $email . "' AND user_pass= '" . $pswd . "'");
            $id = $result[0]->ID;
            $user_nicename = $result[0]->user_nicename;
            $user_registered = $result[0]->user_registered;
            $display_name = $result[0]->display_name;
            $user_url = $result[0]->user_url;
            $verify_status = $result[0]->verify_status;
            $email =  $_POST['email'];
            $id1  = $result[0]->ID;
            if ($result) {
                  if ($verify_status == 1) {
                        // $query = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "bp_xprofile_data WHERE 'user_id'=>.$id."'");
                        // $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users WHERE user_email= '" . $email . "'");
                        $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "bp_xprofile_data WHERE user_id= '" . $id1 . "'");
                        // $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "bp_xprofile_data WHERE user_id= '" . $id1 . "'");
                        // $data = $result;
                        // $id = $result[0]->user_id;
                        // $userpass = $result[0]->user_pass;
                        $value = $result[0]->value;
                        $status = 100;
                        $datas = array('status' => $status, 'response' => 'true', 'error' => '','type' => '0','is_verify' => 'true', 'msg' => 'Login success', "data"=> ['user_id'=>$id,'user_email'=>$email,'user_nicename'=>$user_nicename,'user_pass'=>$pswd ]);
                        echo json_encode($datas);
                  } else {
                        // print_r($user_id);
                        $Caracteres = '012456789';
                        $QuantidadeCaracteres = strlen($Caracteres);
                        $QuantidadeCaracteres--;
                        $qtd = 4;
                        $Hash = NULL;
                        for ($x = 1; $x <= $qtd; $x++) {
                              $Posicao = rand(0, $QuantidadeCaracteres);
                              $Hash .= substr($Caracteres, $Posicao, 1);
                        }
                        $body = '<div id=":xc" class="a3s aiL msg-8934180789862922769"><u></u>
                              <div width="100%" height="100%" bgcolor="#F7F3F0" style="Margin:0">
                              <table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#F7F3F0" style="border-collapse:collapse"><tbody><tr><td valign="top">
                                    <center style="width:100%">
                                          <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;font-family:sans-serif">  
                                          </div>
                                          <div style="max-width:600px"> 
                                                <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width:600px;border-top:7px solid #d84800" bgcolor="#F7F3F0">
                                                      <tbody><tr>
                                                            <td style="text-align:center;padding:15px 0;font-family:sans-serif;font-weight:bold;color:#000000;font-size:30px">
                                                                  Community Junction					</td>
                                                      </tr>
                                                </tbody></table>
                                                <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#FFFFFF" width="100%" style="max-width:600px;border-radius:5px"> 
                                                      <tbody><tr>
                                                            <td>
                                                                  <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                  <tbody><tr>
                                                                              <td style="padding:20px;font-family:sans-serif;line-height:24px;color:#555555;font-size:15px">
                                                                                    <span style="font-weight:bold;font-size:20px">Hi ' . $_POST['field_1'] . ',</span>
                                                                                    <hr color="#F7F3F0"><br>
                                                                                    <p>Thanks for registering!</p>
                              <p>To go to the following activation code and click on the <strong>Activate</strong> button:<br>
                              <span style="color:#d84800">' . $Hash . '</span></p>
                              <p>If the "Activation Key" field is empty, copy and paste the following into the field -' . $Hash . '</p>
                                                            </td>
                                                                  </tr>
                                                                  </tbody></table>
                                                            </td>
                                                      </tr>
                                                </tbody></table>
                                                <br>
                                                <table cellspacing="0" cellpadding="0" border="0" align="left" width="100%" style="max-width:600px;border-radius:5px" bgcolor="#F7F3F0">
                                                      <tbody><tr>
                                                            <td style="padding:20px;width:100%;font-size:12px;font-family:sans-serif;line-height:19px;text-align:left;color:#525252">
                                                                  
                                                                  <span>© 2022 Community Junction</span>
                                                                  <br><br>
                                                                  <a href="#" style="color:#d84800;text-decoration:underline" target="_blank" data-saferedirecturl="#">unsubscribe</a>
                                                            </td>
                                                      </tr>
                                                </tbody></table>      
                                          </div>
                                    </center>
                              </td></tr></tbody></table><div class="yj6qo"></div><div class="adL">
                              </div></div><div class="adL">
                              </div></div>';
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $to =  $email;
                        $subject = "Verification Code";
                        $message = 'Verification Code';
                        $sent = wp_mail($to, $subject, $body, $headers);
                        $result = $wpdb->query($wpdb->prepare("UPDATE wp_users SET user_activation_key='" .$Hash. "' WHERE user_email = '" . $email . "'"));
                        $status = 101;
                        $datas = array('status' => $status, 'response' => 'false', 'error' => 'Please activate your account', 'type' => '0', 'is_verify' => 'true');
                        echo json_encode($datas);
                  }
            } else {
                  $status = 101;
                  $datas = array('status' => $status, 'response' => 'false','type' => '0', 'error' => 'Please Enter The Correct Detail!','is_verify' => 'false');
                  echo json_encode($datas);
            }
      } else {
            $status = 101;
            $datas = array('status' => $status, 'response' => 'False', 'type' => '0', 'error' => 'Please Enter the Login Detail!');
            echo json_encode($datas);
      }
}

$api_name = $_GET['check_url'];
$api_name == 'forget_password' ? Forget() : '';
function Forget(){
      global $wpdb;
      $email =  $_POST['email'];
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //echo("$email is a valid email address");
       } 
       else {
             echo("$email is not a valid email address");
       }
      if($email){
            $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users WHERE user_email= '" . $email . "'");
            $id=$result[0]->ID;
            $verify_status = $result[0]->verify_status;
            if($result){
                  if ($verify_status == 1) {
                        $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users WHERE user_email= '" . $email . "'");
                        // $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "bp_xprofile_data WHERE user_id= '" . $id1 . "'");
                        // $data = $result;
                        // $id = $result[0]->user_id;
                        // $userpass = $result[0]->user_pass;
                        $Caracteres = '012456789';
                        $QuantidadeCaracteres = strlen($Caracteres);
                        $QuantidadeCaracteres--;
                        $qtd = 4;
                        $Hash = NULL;
                        for ($x = 1; $x <= $qtd; $x++) {
                              $Posicao = rand(0, $QuantidadeCaracteres);
                              $Hash .= substr($Caracteres, $Posicao, 1);
                        }
                        $body = '<div id=":2s" class="a3s aiL ">Someone has requested a password reset for the following account:<br>
                        <br>
                        Site Name: Community Junction<br>
                        <br>
                        Username: ' . $result[0]->user_login . '<br>
                        <br>
                        Your OTP is- '.$Hash.'
                        </div></div>';
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $to =  $email;
                        $subject = "Verification Code";
                        $message = 'Verification Code';
                        $sent = wp_mail($to, $subject, $body, $headers);
                        $result = $wpdb->query($wpdb->prepare("UPDATE wp_users SET user_activation_key='" .$Hash. "' WHERE user_email = '" . $email . "'"));
                        // $value = $result[0]->value;
                        $status = 100;
                        $datas = array('status' => $status, 'response' => 'true', 'error' => '', 'msg' => 'Please check your email to verify the account',  'type'=> '1','user_id' => $id );
                        echo json_encode($datas);
                  }
                  else{
                        
                        $status = 101;
                        $datas = array('status' => $status, 'response' => 'false', 'msg' => 'Email not verified', 'error' => '','type' => '0');
                        echo json_encode($datas);
                  }

            }
            else {
                  $status = 101;
                  $datas = array('status' => $status, 'response' => 'False','error' => 'This email address does not exist.', 'type' => '0');
                  echo json_encode($datas);
                  }
      }
}

$api_name = $_GET['check_url'];
$api_name == 'reset_password' ? Reset_pass() : '';

// function Reset_pass()
// {
//       global $wpdb;
//       $userid =  $_POST['id'];
//       $password = $_POST['password'];
//       $dbTblName = $wpdb->prefix . "users";

//       if ($password) {
//             //      $pass = wp_hash_password($_POST['password']);
//             $pass     =   md5($_POST['password']);
//             $result = $wpdb->query($wpdb->prepare("UPDATE $dbTblName SET user_pass='" . $pass . "' WHERE ID = '" . $userid . "'"));

//             $status = 100;
//             $datas = array('status' => $status, 'response' => 'true', 'msg' => 'Password Updated Successfully', 'error' => '');
//             echo json_encode($datas);
//       } else {
//             $status = 101;
//             $datas = array('status' => $status, 'response' => 'False', 'error' => 'Please Enter the Password !');
//             echo json_encode($datas);
//       }
// }

function Reset_pass()
 {
       global $wpdb;
       $userid =  $_POST['id'];
       $password = $_POST['password'];
       $confirm_password = $_POST['confirm_password'];
       $dbTblName = $wpdb->prefix . "users";
       if ($password === $confirm_password) {
      //  if ($password) {
             //      $pass = wp_hash_password($_POST['password']);
             $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users WHERE ID = '" . $userid . "'");
             $verify_status =$result[0]->verify_status;
             if($result){
                  if ($verify_status == 1){
                        $pass     =   md5($_POST['password']);
                        $result = $wpdb->query($wpdb->prepare("UPDATE $dbTblName SET user_pass='" . $pass . "' WHERE ID = '" . $userid . "'"));
                        $status = 100;
                        $datas = array('status' => $status, 'response' => 'true', 'msg' => 'Password Updated Successfully', 'error' => '', 'type' => '0');
                        echo json_encode($datas);
                  }
                  else{
                        $status = 101;
                        $datas = array('status' => $status, 'response' => 'False', 'error' => 'Please Enter the Password !' , 'type' => '0' , 'is_verify' => 'true');
                        echo json_encode($datas);
                  }
             }    
       }         
       else{
            $status = 101;
            $datas = array('status' => $status, 'response' => 'False', 'error' => 'Password and Confirm Password did not match');
            echo json_encode($datas);
      } 
 }



$api_name = $_GET['check_url'];
$api_name == 'register' ? register() : '';
function register()
{

      global $wpdb;
      $dbTblName = $wpdb->prefix . "users";
      date_default_timezone_set('America/Los_Angeles');
      $date = date('Y-m-d h:i:s', time());
      // if(empty($_POST[''])){
      //       $status=101;
      //       $datas = array('status'=>$status,'response'=>'false','error'=>'','msg'=>'Please Fill the Name');
      //       echo json_encode($datas); 
      // }
      if (empty($_POST['signup_username'])) {
            $status = 101;
            $datas = array('status' => $status, 'response' => 'false', 'error' => '', 'msg' => 'Please Fill the Username');
            echo json_encode($datas);
      } elseif (empty($_POST['signup_email'])) {
            $status = 101;
            $datas = array('status' => $status, 'response' => 'false', 'error' => '', 'msg' => 'Please Enter the Email');
            echo json_encode($datas);
      } elseif (empty($_POST['password'])) {
            $status = 101;
            $datas = array('status' => $status, 'response' => 'false', 'error' => '', 'msg' => 'Please Fill the Password');
            echo json_encode($datas);
      } 
      // elseif (empty($_POST['confirm_password'])) {
      //       $status = 101;
      //       $datas = array('status' => $status, 'response' => 'false', 'error' => '', 'msg' => 'Please Fill the Confirm Password');
      //       echo json_encode($datas);
      // }
      //  elseif (empty($_POST['married_name'])) {
      //       $status = 101;
      //       $datas = array('status' => $status, 'response' => 'false', 'error' => '', 'msg' => 'Please enter the married name');
      //       echo json_encode($datas);
      // } elseif (empty($_POST['age'])) {
      //       $status = 101;
      //       $datas = array('status' => $status, 'response' => 'false', 'error' => '', 'msg' => 'Please enter the age');
      //       echo json_encode($datas);
      // } elseif (empty($_POST['marital_status'])) {
      //       $status = 101;
      //       $datas = array('status ' => $status, 'response' => 'false', 'error' => '', 'msg' => 'Please enter the marital status');
      //       echo json_encode($datas);
      // } 
      else {

            $email = $_POST['signup_email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 //echo("$email is a valid email address");
            } 
            else {
                  echo("$email is not a valid email address");
            }
            $retrieve_data = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users WHERE user_email= '" . $email . "'");
            if (empty($retrieve_data)) {
                  $Caracteres = '012456789';
                  $QuantidadeCaracteres = strlen($Caracteres);
                  $QuantidadeCaracteres--;
                  $qtd = 4;
                  $Hash = NULL;
                  for ($x = 1; $x <= $qtd; $x++) {
                        $Posicao = rand(0, $QuantidadeCaracteres);
                        $Hash .= substr($Caracteres, $Posicao, 1);
                  }

                  $dbTblSignUp = $wpdb->prefix . "signups";
                  $signup_user = array(
                        'domain' => 'NULL',
                        'path' => 'NULL',
                        'title' => 'NULL',
                        'user_login' => $_POST['signup_username'],
                        'user_email' => $email,
                        'registered' =>  $date,
                        'activated' => '',
                        'active' => '0',
                        'activation_key' =>  $Hash,
                        'meta' =>  'NULL',
                        'married_name' => $_POST['married_name'],
                        'age' => $_POST['age'],
                        'marital_status' => $_POST['marital_status'],

                  );
                  $wpdb->insert($dbTblSignUp, $signup_user);

                  $user_details = array(
                        'user_login' => $_POST['signup_username'],
                        'user_nicename' => $_POST['signup_username'],
                        'user_email' => $_POST['signup_email'],
                        'user_registered' => $date,
                        'display_name' => $_POST['signup_username'],
                        //    'user_pass' => wp_hash_password($_POST['signup_password']),
                        'user_pass' => md5($_POST['password']),
                        'user_activation_key' => $Hash

                  );
                  //  $check=json_encode($user_details);

                  $wpdb->insert($dbTblName, $user_details);
                  $getLastInsertedId = $wpdb->insert_id;

                  $profile = array(
                        'field_1' => $_POST['field_1'],
                        'field_34' => $_POST['field_34'],
                        'field_35' => $_POST['field_35'],
                        'field_36' => $_POST['field_36'],
                        'field_30' => $_POST['field_30'],
                        'field_29' => $_POST['field_29'],
                        'field_3' => $_POST['field_3'],
                        'field_25' => $_POST['field_25'],
                        'field_37' => $_POST['field_37'],
                        'field_38' => $_POST['field_38'],
                        'field_31' => $_POST['field_31'],
                        'field_32' => $_POST['field_32']
                  );

                  foreach ($profile as $key => $value) {
                        $profile_db = $wpdb->prefix . "bp_xprofile_data";
                        $var =  explode("_", $key);
                        $ketvalue = $var[1];
                        $user_details = array(
                              'field_id' => $ketvalue,
                              'user_id' => $getLastInsertedId,
                              'value' => $value,
                              'last_updated' => $date,

                        );
                        $wpdb->insert($profile_db, $user_details);
                  }

                  $body = '<div id=":xc" class="a3s aiL msg-8934180789862922769"><u></u>
         <div width="100%" height="100%" bgcolor="#F7F3F0" style="Margin:0">
         <table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#F7F3F0" style="border-collapse:collapse"><tbody><tr><td valign="top">
               <center style="width:100%">
                     <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;font-family:sans-serif">  
                     </div>
                     <div style="max-width:600px"> 
                           <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width:600px;border-top:7px solid #d84800" bgcolor="#F7F3F0">
                                 <tbody><tr>
                                       <td style="text-align:center;padding:15px 0;font-family:sans-serif;font-weight:bold;color:#000000;font-size:30px">
                                             Community Junction					</td>
                                 </tr>
                           </tbody></table>
                           <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#FFFFFF" width="100%" style="max-width:600px;border-radius:5px"> 
                                 <tbody><tr>
                                       <td>
                                             <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                               <tbody><tr>
                                                         <td style="padding:20px;font-family:sans-serif;line-height:24px;color:#555555;font-size:15px">
                                                               <span style="font-weight:bold;font-size:20px">Hi ' . $_POST['field_1'] . ',</span>
                                                               <hr color="#F7F3F0"><br>
                                                               <p>Thanks for registering!</p>
         <p>To go to the following activation code and click on the <strong>Activate</strong> button:<br>
         <span style="color:#d84800">' . $Hash . '</span></p>
         <p>If the "Activation Key" field is empty, copy and paste the following into the field -' . $Hash . '</p>
                                       </td>
                                               </tr>
                                             </tbody></table>
                                       </td>
                                 </tr>
                           </tbody></table>
                           <br>
                           <table cellspacing="0" cellpadding="0" border="0" align="left" width="100%" style="max-width:600px;border-radius:5px" bgcolor="#F7F3F0">
                                 <tbody><tr>
                                       <td style="padding:20px;width:100%;font-size:12px;font-family:sans-serif;line-height:19px;text-align:left;color:#525252">
                                             
                                             <span>© 2022 Community Junction</span>
                                             <br><br>
                                             <a href="#" style="color:#d84800;text-decoration:underline" target="_blank" data-saferedirecturl="#">unsubscribe</a>
                                       </td>
                                 </tr>
                           </tbody></table>      
                     </div>
               </center>
         </td></tr></tbody></table><div class="yj6qo"></div><div class="adL">
         </div></div><div class="adL">
         </div></div>';
                  $headers = "MIME-Version: 1.0" . "\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                  $to =  $_POST['signup_email'];
                  $subject = "Verification Code";
                  $message = 'Verification Code';
                  $sent = wp_mail($to, $subject, $body, $headers);
                  $status = 100;
                  $datas = array('status' => $status, 'response' => 'true', 'msg' => 'Please Check your Email to Verify the Account', 'error' => '', 'email' => $email, 'type' => '0');
                  echo json_encode($datas);
            } else {
                  $status = 101;
                  $datas = array('status' => $status, 'response' => 'false', 'error' => '', 'msg' => 'Email Already Registered', 'type' => '0');
                  echo json_encode($datas);
            }
      }
}
$api_name = $_GET['check_url'];
$api_name == 'verifyaccount' ? verifyaccount() : '';
function verifyaccount()
{
      global $wpdb;
      $email = $_POST['email'];
      $user_activation_key = $_POST['code'];
      $type = $_POST['type'];
      // $display_name = $result[0]->display_name;
      $dbTblName = $wpdb->prefix . "users";
      $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users WHERE user_email= '" . $email . "'");
      $user_nicename = $result[0]->user_nicename;
      $user_pass = $result[0]->user_pass;
      $user_id = $result[0]->user_id;
      $id = $result[0]->ID;

      if ($user_activation_key === $result[0]->user_activation_key) {
            $status = 100;
            // $wpdb->update( $profile_db, $user_details);
            $wpdb->query($wpdb->prepare("UPDATE " . $wpdb->prefix . "users SET verify_status='1' WHERE user_email='" . $email . "'"));
            // mysql_query("UPDATE ".$wpdb->prefix ."users SET verify_status='1' WHERE email='".$email."'")
            $datas = array('status' => $status, 'response' => 'true', 'error' => '', 'msg' => "Verification success", 'type' => $type, "data"=> ['user_id'=>$id,'user_email'=>$email,'user_nicename'=>$user_nicename,'user_pass'=>$user_pass ]);
            echo json_encode($datas);
      } else {
            $status = 101;
            $datas = array('status' => $status, 'response' => 'false', 'error' => '', 'msg' => "Verification failed", 'type' => $type);
            echo json_encode($datas);
      }
}

$api_name = $_GET['check_url'];
$api_name == 'addnewcrush' ? addnewcrush() : '';
function addnewcrush()
{
      global $wpdb;
      $crush_name    = $_POST['crush_name'];
      $middle_name   = $_POST['middle_name'];
      $married_name  = $_POST['married_name'];
      $town_city     = $_POST['town_city'];
      $maiden_name   = $_POST['maiden_name'];
      $description   = $_POST['description'];
      $school_work   = $_POST['school_work'];
      // $email   =$_POST['email'];
      $userid   =$_POST['userid'];
      $upload     = wp_upload_bits($_FILES["crush_image"]["name"], null, file_get_contents($_FILES["crush_image"]["tmp_name"]));
      // $retrieve_data = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."users WHERE user_email= '" .$email ."'");
      // $userid  = $retrieve_data[0]->ID;
      

      $result = $wpdb->insert('wp_add_crush', array(
            "crush_name" => $crush_name,
            "middle_name"     => $middle_name,
            "married_name"    => $married_name,
            "maiden_name"     => $maiden_name,
            "town_city"       => $town_city,
            "description"     => $description,
            "school_work"     => $school_work,
            'crush_image'      => $upload['url'],
            'user_id'          => $userid
      ));
      // $userid  = $result[0]->ID;
      // $userid = $result[0]->user_id;
  

      if (!empty($result)) {
            $status = 100;
            $datas = array('status' => $status,  'msg' => "Crush added successfully");
            echo json_encode($datas);
      } else {
            $status = 101;
            $datas = array('status' => $status, 'msg' => "Crush not added");
            echo json_encode($datas);
      }
}

$api_name = $_GET['check_url'];
$api_name == 'editcrush' ? editcrush() : '';
function editcrush()
{
      global $wpdb;
      $crush_name    = $_POST['crush_name'];
      $middle_name   = $_POST['middle_name'];
      $married_name  = $_POST['married_name'];
      $town_city     = $_POST['town_city'];
      $maiden_name   = $_POST['maiden_name'];
      $description   = $_POST['description'];
      $school_work   = $_POST['school_work'];
      // $user_id       = $_POST['user_id'];
      $id            = $_POST['id'];
      $upload        = wp_upload_bits($_FILES["crush_image"]["name"], null, file_get_contents($_FILES["crush_image"]["tmp_name"]));
      // $retrieve_data = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."users WHERE user_email= '" .$email ."'");
      // $retrieve_data = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."users WHERE user_id= '" .$user_id."'");
      // $userid  = $retrieve_data[0]->ID;
      $dbData = array(
                  "crush_name"      => $crush_name,
                  "middle_name"     => $middle_name,
                  "married_name"    => $married_name,
                  "maiden_name"     => $maiden_name,
                  "town_city"       => $town_city,
                  "description"     => $description,
                  "school_work"     => $school_work,
                  'crush_image'     => $upload['url'],
                  // 'email'           => $email,
      );
      $result=$wpdb->update('wp_add_crush', $dbData, array('id' => $id));
 
      if (!empty($result)) {
            $status = 100;
            $datas = array('status' => $status,  'msg' => "Crush updated successfully");
            echo json_encode($datas);
      } else {
            $status = 101;
            $datas = array('status' => $status, 'msg' => "Crush not updated");
            echo json_encode($datas);
      }
}


$api_name = $_GET['check_url'];
$api_name == 'getcrush' ? getcrush() : '';
function getcrush()
{
      global $wpdb;
      $email=$_POST['email'];
      if(!empty($email)){
            $results = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users WHERE user_email= '" . $email . "'");
            $id  = $results[0]->ID;
            $result = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix ."add_crush WHERE user_id = '" .$id."'"); 
            if (!empty($result)) {
                  $status = 100;
                  $datas = array('status' => $status,  'msg' => "Get Crush data", 'data'=>$result);
                  echo json_encode($datas);
            } else {
                  $status = 101;
                  $datas = array('status' => $status, 'msg' => "Crush is empty");
                  echo json_encode($datas);
            }

      }
}

$api_name = $_GET['check_url'];
$api_name == 'contactus' ? contactus() : '';
function contactus(){
      global $wpdb;
      $value=$_POST['value'];
      $name    = $_POST['your-name'];
      $email      =  $_POST['email'];
      $yoursubject     = $_POST['your-subject'];
      $yourmessage     = $_POST["your-message"];
      $key = "";
      $values = "";
      // loop
      $arr = array(
            "your-name"  => $_POST['your-name'],
            "email"    =>  $_POST['email'],
            "your-subject"  => $_POST['your-subject'],
            "your-message"  => $_POST['your-message']
      );
      foreach($arr as $key=>$value){
            $result = $wpdb->insert('wp_vxcf_leads_detail', array(
                  "name"  => $key,
                  "value"  => $value
            ));
      }
      if (!empty($result)) {
            $status = 100;
            $datas = array('status' => $status,  'msg' => "Contact us data added successfully");
            echo json_encode($datas);
      } else {
            $status = 101;
            $datas = array('status' => $status, 'msg' => "Contact us data not added");
            echo json_encode($datas);
      }
}

$api_name = $_GET['check_url'];
$api_name == 'memberapi' ? memberapi() : '';
function memberapi(){
      global $wpdb;
      // $email = $_POST['email'];
      // if($email){
            $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users");
            $user_name  = $result[0]->user_nicename;
            $id  = $result[0]->ID;
            // print_r($id);die;
            $results = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "bp_xprofile_data");
            if(!empty($results)){
                  $status = 100;
                  $datas = array('status' => $status,  'msg' => "Member data displayed successfully", 'data'=>$results);
                  echo json_encode($datas);    
            }
            else{
                  $status = 101;
                  $datas = array('status' => $status, 'msg' => "Members data not displayed");
                  echo json_encode($datas);

            }
}

$api_name = $_GET['check_url'];
$api_name == 'logout' ? logout() : '';
function logout(){
      session_start();
      if(session_destroy())
      {
            $result = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "users");
            $id  = $result[0]->ID;
            $status = 100;
            $datas = array('status' => $status,  'msg' => "Logged out successfully", 'type' => '0', 'id'=>$id);
            echo json_encode($datas);  
      }
      else{
            $status = 101;
            $datas = array('status' => $status,  'msg' => "Not logged out", 'type' => '0','id'=>$id);
            echo json_encode($datas);
      }
}



