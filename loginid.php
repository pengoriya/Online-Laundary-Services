
<?php 
if(isset($_POST['login']));
{
session_start();
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("myproject")or die(mysql_error());
extract($_POST);
$password=md5($password);
$query="select email from createact where email='$email' and password='$password'";
$result=mysql_query($query)or die(mysql_error());
$count=mysql_num_rows($result);
if($count==1)
{
	
	$_SESSION['email']=$email;
 header('location:addtocart.php');
}
else
{
  	  
 header('location:createnew.php');	
}
}
if(isset($_GET['logout']))
{
	session_unregister('email');
	header('location:createnew.php');
}
?>



<!--

 /* Session With Sql  
   session_start();
   mysql_connect("localhost","root","") or die(mysql_error());
   mysql_select_db("myproject")or die(mysql_error());
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT email FROM createact WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: booknow.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
