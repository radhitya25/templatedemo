<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['phone'];
$message=$_POST['message'];

$to=$email;

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From:  aditz062@gmail.com <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc:  info@radian-data.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$phone,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>