<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login User</title>
</head>
<body><?php 
mysql_connect("localhost","root","") or die(mysql_error() );

mysql_select_db("website")or die(mysql_error() );
extract($_POST);
if(strlen($uname)==0  || strlen($email)==0 || strlen($password)==0 || strlen($mbl)==0 || strlen($dob)==0)
{
 trigger_error("Please Fill All Entry",256); 	
}    
      

$password=md5($password);
$query="insert into account values('$uname','$email','$mbl','$password',$dob')";
mysql_query($query) or die(mysql_error() );
echo"dear user account $username Now active...!!!";

?>
</body>
</html>
<?php 
function cust_error($lvl,$msg)
 {
	 echo $msg;
 die();
 }
?>

</body>
</html>