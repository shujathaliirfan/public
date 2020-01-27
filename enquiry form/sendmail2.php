<?php
if($_POST){
$to = $_POST['email'];
$subject = "Hopechennai";

$message = '<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="m_5275377665128817231bodyTable" style="border-collapse:collapse;height:100%;margin:0;padding:0;width:100%;background-color:#e9eaec">
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
    <td style="color:#333333;padding-top:20px;padding-bottom:3px"><strong>Mobile No.</strong></td>
    </tr>
    <tr>
    <td style="color:#555555;padding-top:3px;padding-bottom:20px">'.$_POST['phone'].'</td>
    </tr>
    </tbody>
  
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

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@hopechennai.com, ranihope@gmail.com>' . "\r\n";
$headers .= 'Cc: <sathiyavathi@xbs.in>' . "\r\n";

$f=mail($to,$subject,$message,$headers);
if($f){
   echo "<script>alert('mail has been sent successfully');window.history.back();</script>";
}else{
    echo "<script>alert('mail not send');window.history.back();</script>";
}
}

?>