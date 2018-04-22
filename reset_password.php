<?php
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "myproject");
		$sql = "UPDATE `createact SET `password` = '" . md5($_POST["password"]). "' WHERE `email` = '" . $_GET["email"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";
		
	}
?>
<link href="stylesheet/demo-style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="stylesheet/footer.css" />
<script>
function validate_password_reset() {
	if((document.getElementById("password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	if(document.getElementById("password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}
	
	return true;
}
</script>
<div class="main-class">
<form name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">
<h1>Reset Password</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message"> 
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>
    
    
	<!--<div class="field-group">
		<div><label for="email">Email Id</label></div>
		<div>
		<input type="email" name="email" id="email" class="input-field" required="required"></div>
	</div>
   --> 
	<div class="field-group">
		<div><label for="Password">Password</label></div>
		<div>
		<input type="password" name="password" id="password" class="input-field" placeholder="New Password"></div>
	</div>
	
	<div class="field-group">
		<div><label for="password">Confirm Password</label></div>
		<div><input type="password" name="confirm_password" id="confirm_password" class="input-field" placeholder="Confirm Password"></div>
	</div>
	
	<div class="field-group">
		<div><input type="submit" name="reset-password" id="reset-password" value="Reset Password" class="form-submit-button"></div>
	</div>	
</form>
</div>
<footer class="page-footer">
         <nav class="footer bottom">
              <a href="home.php" class="footer_text">The Dhobi-Wale</a></li>
              <a href="#about" class="footer_text">Terms & condition</a></li>
                 <a class="footer_text">&copy;2017 All right reserved</a></li>
                  <a class="footer_text">Design & Developed By Rishabh Pengoriya</a></li>
                   
         </nav>         
         
         </footer>
				