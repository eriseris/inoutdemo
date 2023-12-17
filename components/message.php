<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

 $mail = new PHPMailer(true);
 
 try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'erytisgaming@gmail.com';
    $mail->Password = 'vfooieabiljydpic';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, 'Message from '.$name);
    $mail->addAddress($email);
    $mail->Subject = 'In Out | Message';
    $mail->Body = "
    <html>
    <head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
      <title>Message</title>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <style type=\"text/css\">
      /**
       * Google webfonts. Recommended to include the .woff version for cross-client compatibility.
       */
      @media screen {
        @font-face {
          font-family: 'Source Sans Pro';
          font-style: normal;
          font-weight: 400;
          src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format('woff');
        }
        @font-face {
          font-family: 'Source Sans Pro';
          font-style: normal;
          font-weight: 700;
          src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format('woff');
        }
      }
      /**
       * Avoid browser level font resizing.
       * 1. Windows Mobile
       * 2. iOS / OSX
       */
      body{
        background-color: white;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }

      body,
      table,
      td,
      a {
        -ms-text-size-adjust: 100%; /* 1 */
        -webkit-text-size-adjust: 100%; /* 2 */
      }
      /**
       * Remove extra space added to tables and cells in Outlook.
       */
      table,
      td {
        mso-table-rspace: 0pt;
        mso-table-lspace: 0pt;
      }
      /**
       * Better fluid images in Internet Explorer.
       */
      img {
        -ms-interpolation-mode: bicubic;
      }
      /**
       * Remove blue links for iOS devices.
       */
      a[x-apple-data-detectors] {
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        color: inherit !important;
        text-decoration: none !important;
      }
      /**
       * Fix centering issues in Android 4.4.
       */
      div[style*=\"margin: 16px 0;\"] {
        margin: 0 !important;
      }
      body {
        width: 100% !important;
        height: 100% !important;
        padding: 0 !important;
        margin: 0 !important;
      }
      /**
       * Collapse table borders to avoid space between cells.
       */
      table {
        border-collapse: collapse !important;
      }
      img {
        height: auto;
        line-height: 100%;
        text-decoration: none;
        border: 0;
        outline: none;
      }
      a {
        color:black;
        text-decoration: none;
      }
      .contact a i{
      color: #00ADEE;
      transition: .1s linear;
      }
      
      </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\">
    </head>
    <body style=\"background-color: #e9ecef;\">

      <!-- start preheader -->
      <div class=\"preheader\" style=\"display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;\">
        Message sent by a client from the site.
      </div>
      <!-- end preheader -->

      <!-- start body -->
      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">

        <!-- start logo -->
        <tr>
          <td align=\"center\">
            <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
            <tr>
            <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
              <tr>
                <td align=\"center\" valign=\"top\" style=\"padding: 36px 24px;\">
                  <a href=\"https://inout-me.com/\" target=\"_blank\" style=\"display: inline-block;\">
                    <img src=\"https://i.ibb.co/5jP0fcH/in-out-dark-header.png\" alt=\"In Out\" border=\"0\" width=\"100\" style=\"display: block; width: 100px; max-width: 100px; min-width: 100px;\">
                  </a>
                </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
        <!-- end logo -->

        <!-- start hero -->
        <tr>
          <td align=\"center\">
            <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
            <tr>
            <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
              <tr>
                <td align=\"left\" bgcolor=\"#ffffff\" style=\"padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;\">
                  <h1 style=\"text-align:center; margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;\">MESSAGE FROM A CLIENT</h1>
                </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
        <!-- end hero -->

        <!-- start copy block -->
        <tr>
          <td align=\"center\">
            <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
            <tr>
            <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">

              <!-- start copy -->
              <tr>
                <td align=\"left\" bgcolor=\"#ffffff\" style=\"padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;\">
                  <p style=\"margin: 0;\"><b>From:</b> $name</p>
                  <p style=\"margin: 0;\"><b>Email:</b> $email</p> 
                </td>
              </tr>
              <tr>
                <td align=\"left\" bgcolor=\"#ffffff\" style=\"padding: 0 24px 24px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;\">
                  <p style=\"margin: 0;\"><b>Message:</b> $msg</p>
                </td>
              </tr>
              <!-- end copy -->

            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
        <!-- end copy block -->

        <!-- start footer -->
        <tr>
          <td align=\"center\"style=\"padding: 24px;\">
            <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
            <tr>
            <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">

              <!-- start permission -->
              <tr>
                <td class=\"contact\" align=\"center\" style=\"padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: black;\">
                  <p style=\"margin: 0;\">This email was automated from the website please do not reply. Thank you ヅ</p>
                </td>
              </tr>
              <!-- end permission -->

              <!-- start unsubscribe -->
              <tr>
                <td class=\"contact\" align=\"center\" style=\"padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: black;\">
                  <p style=\"margin: 0;\">Follow Us</p>
                  <p style=\"margin: 0;\"><a href=\"https://www.facebook.com/inoutconceptsme/\"><i class=\"fab fa-facebook-f\"></i> Facebook</a></p>
                  <p style=\"margin: 0;\"><a href=\"https://www.instagram.com/inoutconceptsme/\"><i class=\"fab fa-instagram\"></i> Instagram</a></p>
                </td>
              </tr>
              <!-- end unsubscribe -->

            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
        <!-- end footer -->

      </table>
      <!-- end body -->

    </body>
    </html>";
        
$mail->send();

$success_msg[] = 'Sent Successfully!';
} catch (Exception $e) {
   $erro_msg[] = $mail->ErrorInfo;
}

?>