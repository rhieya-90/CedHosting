<?php 
include("header.php");
$email=$_GET['email'];
$vkey=$_GET['verificationKey'];
?>
		<!---login--->
<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form action="" class="validateForm" method="post"> 
				 <div class="register-top-grid">
					
					 <div>
					 	<h3>Verification Through Email</h3>
						<span>Email Address<label>*</label></span>
						<input type="text" name="email" value=""> 
					 </div>
					 <div>
					 	<h3>Verification Through Mobile</h3>
						<span>Mobile Number<label>*</label></span>
						<input type="text" name="mobile" value=""> 
					 </div>
					 <div>
						 <span>Email OTP<label>*</label></span>
						 <input type="text"> 
					 </div>
					  <div>
						 <span>Mobile OTP<label>*</label></span>
						 <input type="text"> 
					 </div>
					 <div>
						 <input type="submit" name="verify_mail" value="Verify Email" class="register-btn">
					 </div>
					 <div>
						<input type="submit" name="verify_mobile" value="Verify mobile" class="register-btn">
					 </div>
					 <div class="clearfix"> </div>
				 </div>
				</form>
		   </div>
		 </div>
	</div>
<!-- registration -->

</div>


<!-- login -->
				<?php
					include("footer.php");
				?>
				