
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dhobiwale| Registration</title>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<!--<script src="javascript/script1.js" type="text/javascript"></script>-->
</head>
<style>
body{
	
	background-image:url(image/bubbles-on-blue-background.jpg);
	width:100%;}


</style>




 
<body>

<form action="loginid.php" method="post" name="frm">
<div class="useraccount">
<nav class="login" id="login">


<input type="email" name="email" id="email" placeholder="Email address" required="required"  onblur="filldetail();"/>


<input type="password" name="password" id="password" placeholder="Password" required="required" pattern="[a-z,A-Z,0-9]{8,15}" onblur="filldetail();"/>
<span class="loginbtn"><input type="submit" name="login" value="Login" onclick="login();" id="signin" /></span><p id="login"></p>
<div class="forgetpass"><a href="forgotpassword.php">Forget Password</a></div>
</nav></form>
<form action="emailconnect.php" method="post">
<nav class="newuser" id="newuser">
<h1><b>Create a new account </b></h1>


<div><input type="text" name="firstname" placeholder="First Name" required=required pattern="[A-Za-z]{3,9}" title="Please Enter The Name " onblur="filldetail();" id="firstname" /></div>

<div><input type="text" name="lastname" placeholder=" Last Name" required=required pattern="[A-Za-z]{3,9}" title="Please Enter the SurName Like Gupta" onblur="filldetail();" id="lastname"/></div>

<div><input type="email" name="email" id="email"  placeholder="Email id ." required="required" onblur="checkemail();"/><p id="checkmail" onblur="filldetail();"></p></div>

<div><input type="password" name="password"  placeholder=" New Password" required="required" pattern="[A-Za-z0-9]{8,15}" title="Too Short min. 8 words" id="password"/></div>
<div><input type="password" name="confirmpass" placeholder="Confirm Password" required="required" id="confirmpass" onblur="Validate();"/></div><p id="cnfpass"></p>
<div><input type="text" name="mobile" id="mobile" placeholder="Mobile No." required="required" pattern="[0-9]{10,10}" title="Enter Your Mobile No.  " onblur="checkmobile();"/></div><p id="checkmbl"></p>


<div id="fill" class="menu" >

<select name="city" required="required">
<option value="">--City--</option>
<option value="bhopal">Bhopal</option> 
</select>
<select name="area" required="required">
<option value="">--Area--</option>
<option value="airportroad">Airport Road</option>
<option value="anandnagar">Anand Nagar</option>
<option value="apasra">Apasra</option>
<option value="arerahill">Arera Hills</option>
<option value="areracolony">Arere Colony</option>
<option value="ashokagarden">Ashoka Garden</option>
<option value="awadhpuri">Awadhpuri</option>
<option value="ayodhayanagar">Ayodhaya nagar</option>
<option value="bankcolony">Bank Colony</option>
<option value="bhartiniketan">Bharti Niketan</option>
<option value="bharkheda">Bharkheda</option>
<option value="bhawanidham">Bhawani Dham</option>
<option value="bhopalrailway">Bhopal Railway Station</option>
<option value="bhopaltakies">Bhopal Takies</option>
<option value="airport">Bittan Market</option>
<option value="capitalpump">Capital Petrol Pump</option>
<option value="charimli">Char Imli</option>
<option value="chetanbridge">Chetak Bridge</option>
<option value="cholaroad">Chola Road</option>
<option value="chunnabhatti">Chunna Bhatti</option>
<option value="danishnagar">Danish Nagar</option>
<option value="dwarka">Dwarka Dham</option>
<option value="dig">DIG</option>
<option value="gandhinagar">Gandhi Nagar</option>
<option value="gautamnagar">Gautam Nagar</option>
<option value="govindpura">Govindpura</option>
<option value="gulmohar">Gulmohar</option>
<option value="habibganj">Habibganj</option>
<option value="hosangabadroad">Hoshangabad Road</option>
<option value="ibrahimpura">Ibrahim Pura</option>
<option value="idgahhills">Idgah Hills</option>
<option value="indrapuri">Indrapuri</option>
<option value="isbtcolony">ISBT Area</option>
<option value="jahangirabad">Jahangirabad</option>
<option value="jpnagar">JP Nagar</option>
<option value="kalpananagar">Kalpana Nagar</option>
<option value="kamlapark">Kamla Park</option>
<option value="karond">Karond</option>
<option value="kohifiza">Kohifiza</option>
<option value="kolarroad">Kolar Road</option>
<option value="lalghati">Lalghati</option>
<option value="laxminagar">Laxminagar</option>
<option value="malviyanagar">Malviya Nagar</option>
<option value="matamandir">Mata Mandir</option>
<option value="misrod">Misrod</option>
<option value="mpnagarI">MP Nagar Zone-I</option>
<option value="mpnagarII">MP Nagar Zone-II</option>
<option value="nariyalkheda">Nariyal Kheda</option>
<option value="nehrunagar">Nehru Nagar</option>
<option value="newmarket">New Market</option>
<option value="newsubhashnagar">New Subhash Nagar</option>
<option value="nishatpura">Nishatpura</option>
<option value="oldsubhashnagar">Old Subhash Nagar</option>
<option value="patelnagar">Patel Nagar</option>
<option value="peergatearea">Peer Gate Area</option>
<option value="piplani">Piplani</option>
<option value="pribatpump">Pribat Petrol Pump</option>
<option value="pushpanagar">Pushpa nagar</option>
<option value="rachnanagar">Rachna Nagar</option>
<option value="saketnagar">Saket Nagar</option>
<option value="saktinagar">Sakti Nagar</option>
<option value="santiniketan">Santi Niketan</option>
<option value="shahjahanabad">Shahjahanabad</option>
<option value="Shastri Nagar">Shastri Nagar</option>
<option value="shymlahills">Shymla Hills </option>
<option value="Suraj Nagar">Suraj Nagar</option>
<option value="ttnagar">TT Nagar</option>
<option value="viproad">VIP Road</option>
</select><br />
<div><input type="text" name="address" placeholder="House No,Street" /></div> 
<div><input type="text" name="landmark" placeholder="Landmark" /></div>  
<div><input type="submit" name="submit"  value="Register"  class="register"></div>
<a href="#login">I already hava an account</a>
</nav>


</div>
</form>
</body>
</html>
<script type="text/javascript" src="Jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
   
  /*  function Validate(){
		
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpass").value;
		
       if (password != confirmPassword) {
		   document.getElementById("password").style.borderColor="#E34234";
		   document.getElementById("confirmpass").style.borderColor="#E34234";
		   //alert("donot match");
            document.getElementById("cnfpass").innerHTML= "<b>Password do not match</b>";
			 
	   }
	 else
	 {document.getElementById("cnfpass").innerHTML="match";}
	   }
	  */       	    
     function checkemail()
      {
	 
	 var email=$("#email").val();
	 
	 $.ajax({
		      type:'POST',
			  url:'check.php',
			  data:{email:email},
			  success:function(msg){
			  document.getElementById("checkmail").innerHTML=msg;
			  }
			  });
 
	 
    return; 
 }   
	
 	
  function checkmobile()
 {
	
	 var mobile=$("#mobile").val();
	 
	 $.ajax({
		      type:'POST',
			  url:'check.php',
			  data:{mobile:mobile},
			  success:function(msg){
			  document.getElementById("checkmbl").innerHTML=msg;
			  }
			  });
 
	 
    return; 
 }	
/*
function login()
 {
	 
	 alert("lol");
	 var email=$("#email").val();
	 var password=$("#password").val();
	 
	 $.ajax({
		      type:'POST',
			  url:'check.php',
			  data:{email:email,password:password},
			  success:function(msg){
			  document.getElementById("login").innerHTML=msg;
			  }
			  });
 
	 
   return;	 
 }
*/		
  
</script>


 
 
 
 
 
 
 
 
