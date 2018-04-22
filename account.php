
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New login</title>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
</head>
	 

<body>
<h1 >new user account</h1>

<section class="page-body">
<form action="loginid.php" method="post" name="frm" onsubmit="validate()">
<div><input type="email" name="email" placeholder="Email address or Phone No." required="required"  /></div>
<div><input type="password" name="password"  placeholder="Password" required="required" pattern="[a-z,A-Z,0-9]{8,15}"/></div>
<div align="center"><input type="submit" value="Login" /></form></div>
<a href="createnew.php">
<div align="center"><input type="submit" value="Create New Account"   /></div>
</section>
</form>
</body>
</html>
<script type="text/javascript">
 
 function validate()
 {
	 if(frm.email.value=="")
	 {
		 alert("Enter a name");
		 frm.username.focus();
		 return false;
		 
	 } 
 }
		</script>
 
 
 

