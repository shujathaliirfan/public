
<?php
//print_r($_POST);
//exit();
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
require_once "../PHPMailer-master/PHPMailerAutoload.php";

$mail = new PHPMailer;
$mail->SMTPDebug = 0;
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'localhost';                 // Specify main and backup server
$mail->Port = 465;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'enquiry@chemistryonlinetutor.com';                // SMTP username
$mail->Password = 'xmedia@1234';                  // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'enquiry@chemistryonlinetutor.com';
$mail->FromName = 'Chemistry Online Tutor';
$mail->AddAddress('irfan@xmediasolution.com', 'shujath');  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional

$mail->IsHTML(true);                                  // Set email format to //HTML

$mail->Subject = 'Enquiry Details'; 
$mail->Body    = '<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="m_5275377665128817231bodyTable" style="border-collapse:collapse;height:100%;margin:0;padding:0;width:100%;background-color:#e9eaec">
        <tbody><tr>
            <td align="center" valign="top" id="m_5275377665128817231bodyCell" style="height:100%;margin:0;padding:50px 50px;width:100%">
                
                
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="m_5275377665128817231templateContainer" style="border-collapse:collapse;border:0;max-width:600px!important">
                                            <tbody><tr>
                        <td valign="top" id="m_5275377665128817231templateBody" style="background-color:#ffffff;border-top:0;border:1px solid #c1c1c1;padding-top:0;padding-bottom:0px">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="m_5275377665128817231mcnTextBlock" style="min-width:100%;border-collapse:collapse">
                                <tbody class="m_5275377665128817231mcnTextBlockOuter">
                                    <tr>
                                        <td valign="top" class="m_5275377665128817231mcnTextBlockInner">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse" class="m_5275377665128817231mcnTextContentContainer">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px" class="m_5275377665128817231mcnTextContent">
    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="display:block;min-width:100%;border-collapse:collapse;width:100%">
    <tbody>
    <tr>
    <td style="color:#333333;padding-top:20px;padding-bottom:3px"><strong>Name</strong></td>
    </tr>
    <tr>
    <td style="color:#555555;padding-top:3px;padding-bottom:20px">'.$_POST['name'].'</td>
    </tr>
    </tbody>
    </table>
    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top:1px solid #dddddd;display:block;min-width:100%;border-collapse:collapse;width:100%">
    <tbody>
    <tr>
    <td style="color:#333333;padding-top:20px;padding-bottom:3px"><strong>Email</strong></td>
    </tr>
    <tr>
    <td style="color:#555555;padding-top:3px;padding-bottom:20px">'.$_POST['email'].'</td>
    </tr>
    </tbody>
    </table><span class="im">
    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top:1px solid #dddddd;display:block;min-width:100%;border-collapse:collapse;width:100%">
    <tbody>
    <tr>
    <td style="color:#333333;padding-top:20px;padding-bottom:3px"><strong>Mobile No.</strong></td>
    </tr>
    <tr>
    <td style="color:#555555;padding-top:3px;padding-bottom:20px">'.$_POST['number'].'</td>
    </tr>
    </tbody>
    </table>
    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top:1px solid #dddddd;display:block;min-width:100%;border-collapse:collapse;width:100%">
        <tbody>
        <tr>
        <td style="color:#333333;padding-top:20px;padding-bottom:3px"><strong>Requirements</strong></td>
        </tr>
        <tr>
        <td style="color:#555555;padding-top:3px;padding-bottom:20px">'.$_POST['requirements'].'</td>
        </tr>
        </tbody>
        </table>
    
                                                        </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" id="m_5275377665128817231templateFooter" style="background-color:#e9eaec;border-top:0;border-bottom:0;padding-top:12px;padding-bottom:12px">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="m_5275377665128817231mcnTextBlock" style="min-width:100%;border-collapse:collapse">
                                <tbody class="m_5275377665128817231mcnTextBlockOuter">
                                    <tr>
                                        <td valign="top" class="m_5275377665128817231mcnTextBlockInner">
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody></table>
                
                
                </td>
            </tr>
        </tbody></table>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo '<script>alert("Message could not be sent.");</script>';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit();
}
else
{
echo '<script>alert("Message has been sent");
window.history.back();
</script>';
}
?>