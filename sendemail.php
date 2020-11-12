<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $plan = $_POST['plan'];
  //$message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.ionos.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'joshuanduka@broadbased.net'; // Gmail address which you want to use as SMTP server
    $mail->Password = '@Bbc123!'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('joshuanduka@broadbased.net'); // Gmail address which you used as SMTP server
    $mail->addAddress($_POST["email"]); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

  
    $mail->isHTML(true);
    $mail->Subject = 'BROADBASED FTTH WELCOME PACK- INTERNET SERVICES';

  
    

    $mail->Body = //$htmlContent = file_get_contents("email/send.html");

      
      "
      <body style='margin: 0; padding: 0;'>
      <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
        <tr>
          <td style='padding: 20px 0 30px 0;'>
    
    <table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border-collapse: collapse; border: 1px solid #cccccc;'>
      <tr>
        <td align='center' bgcolor='#f6f6f6' style='padding: 40px 0 30px 0;'>
          <img src='https://drive.google.com/thumbnail?id=1fJLL9n8B_GYXUk8q6Br_wRP5-p5sujol' alt='logo' max-width='100%'  style='display: block;' />
        </td>
      </tr>
      <tr>
        <td  align='center' bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
          <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
            <tr>
              <td style='color: #153643; font-family: Arial, sans-serif;'>
                <h1 style='font-size: 24px; margin: 0;'>Dear $name </h1>
              </td>
            </tr>
            <tr>
              <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;'>
                <p style='margin: 0;'> Welcome to the best broadband Internet provider in Nigeria!<br><a href='https://billing.broadbased.net/'>My Broadbased</a></div> is your 24/7, Easy Access, online portal where you can manage your broadband subscription, view your usage and make payments. </p>
              </td>
            </tr>
            <tr>
              <td>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
                  <tr>
                    <td width='260' valign='top'>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
                        <tr>
                          <td>
                            <img src='https://drive.google.com/thumbnail?id=1sK2668qV_gmt97AWJjmNCNPfVyQ9sjC6' alt=''   style='display: block;' />
                          </td>
                        </tr>
                        <tr>
                          <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;'>
                            <p style='margin: 0;'>Your broadbased login details<br> <strong>USERNAME: $username </strong> <br> <strong>PASSWORD: $password </strong></p>
                            <p style='margin: 0;'>Click <a href='https://billing.broadbased.net/'>My Broadbased</a></div> to access your online portal where you can manage your broadband subscription, view your usage and make payments. </p>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
                    <td width='260' valign='top'>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
                        <tr>
                          <td>
                            <img src='https://drive.google.com/thumbnail?id=1_S6MalvfFUfcdJSXRrV3sc-eZZSxyH31' alt='' style='display: block;' />
                          </td>
                        </tr>
                        <tr>
                          <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding : 25px 0 0 0;'>
                            <p style='margin: 0;'><p><strong>SERVICE PLAN:</strong><br><strong style='color: #FFB800;'> $plan </strong></p></p><br>
                            <p style='margin: 0;'>Click <a href='https://billing.broadbased.net/'>My Broadbased</a></div> to manage your broadband subscription, view your usage and make payments. </p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td align='center' bgcolor='#517AB7' style='padding: 30px 30px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
            <tr>
              <td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;'>
                <p style='margin: 0;'>&reg; <strong>CUSTOMER SUPPORT</strong><br/>
                  <img src='https://drive.google.com/thumbnail?id=1G0_diZSjV7BgsaVf-8P9P6U_-E3rhfrf' alt='Twitter.' width='100' height='100' style='display: block;' border='0' />
              </td>
              <td  style='color: #153643; font-family: Arial, sans-serif; font-size: 14px;' align='right' >
                <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse;'>
                  <tr>
                    <td  >
                        <a href='tel:012271000'><strong> 012271000 </strong>  </a>
                    </td>
                    <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
                    <td>
                      <a href='http://www.twitter.com/'>
                        <img src='https://assets.codepen.io/210284/fb.gif' alt='Facebook.' width='38' height='38' style='display: block;' border='0' />
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    
          </td>
        </tr>
      </table>
    </body>
      ";
    
    
             
    $mail->send();
    $alert = '<div class="alert-success">
                 <span>WELCOME PACK SENT.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
