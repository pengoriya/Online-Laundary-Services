<?php
	if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root", "", "myproject");
		
		$condition = "";
		
		if(!empty($_POST["email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = "email = '" . $_POST["email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from createact " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
?>
<link href="stylesheet/demo-style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="stylesheet/footer.css" />
<script>
function validate_forgot() {
	if((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
		document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
		return false;
	}
	return true
}
</script>
<div class="main-class">
<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
<h1>Forgot Password?</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

	
	
	<div class="field-group">
		<div><label for="email">Email</label></div>
		<div><input type="email" name="email" id="email" class="input-field" required="required" placeholder="Email Address"></div>
	</div>
	
	<div class="field-group">
		<div><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
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