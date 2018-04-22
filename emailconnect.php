<?php set_error_handler("cust_error"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Verify</title>
</head>
<body>


<?php
extract($_POST);

$mailmessage = "<h3>New Customer Details</h3>";
$mailmessage = $mailmessage . "<div>Name : $firstname</div><br />";
$mailmessage = $mailmessage . "<div>Last Name : $lastname</div><br />";
$mailmessage = $mailmessage . "<div>Email/Phone : $email</div><br />";
$mailmessage = $mailmessage . "<div>Password : $password</div><br />";
$mailmessage = $mailmessage . "<div>Confirm Password : $confirmpass</div><br />";
$mailmessage = $mailmessage . "<div>Mobile No. : $mobile</div><br />";
$mailmessage = $mailmessage . "<div>Gender : $gender</div><br />";
$mailmessage = $mailmessage . "<div>House No: $adress</div><br />";
$mailmessage = $mailmessage . "<div>area: $area</div><br />";

$emailfrom="New Customer Contact";
$subject = "New Contact";

$loginid ="skcoin7";
$loginpassword="123456@123456";


$emailidto="rishabpeangoriya@gmail.com";
$file="none";

//Company Desk To Admin

require "./smtpservice.php";
smtpmailer($emailidto, $loginid, $loginpassword , $emailfrom, $subject, $mailmessage,$file);


//Company Desk to customer...

$emailfrom="Dhobi-Wale";
$subject="Welcome to Dhobi-wale | Online Laundary Services";
$mailmessage="Thank You So Much For Register Your Account On Dhobi-Wale.com|Online Laundary Services <br/><br/><b> Your Email Id is :$email <br/> Password : $password</b>";
$file="";
smtpmailer($email, $loginid, $loginpassword , $emailfrom, $subject, $mailmessage,$file);
//echo $mailmessage; 


//*****DataBase Connectivity**////
mysql_connect("localhost","root","") or die(mysql_error() );

mysql_select_db("myproject")or die(mysql_error() );
  

$password=md5($password);

$query="insert into createact values('$firstname','$lastname','$email','$password','$mobile','$city','$area','$address','$landmark')";

mysql_query($query) or die(mysql_error() );
//echo"dear user account $email Now active...!!!";
$message="Registration Successfully...Please Login";
echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace('./createnew.php');
    </SCRIPT>";/*
header('location:addtocart.php');*/

?>

<?php 
function cust_error($lvl,$msg)
 {
 
 
 
 }
?>
</body>
</html>

