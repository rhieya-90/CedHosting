<?php 
include("header.php");
?>
		<!---login--->
<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form action="" class="validateForm" method="post"> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text" name="f_name"  pattern="[^ ][A-Za-z]+" title="No spaces are allowed"> 
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text" name="l_name"  pattern="[^\s][A-Za-z]+" title="No spaces are allowed"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" title="ex xyz@gmail.com" name="email" pattern="[^\s][A-Za-z0-9]+@[a-z]+.[^.][a-z]+"> 
					 </div>
					  <div>
						 <span>Mobile Number<label>*</label></span>
						 <input type="text" id="validate_mobile" title="10 digit no" name="number" pattern="[0-9]{10}"> 
					 </div>
					 <div class="clearfix"> </div>
					 </div>
					  <div class="clearfix"> </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input class="validatePassword" type="password" id="password" pattern="[^ ][A-Za-z0-9\W+]{8,16}" title="No spaces are allowed" name="pass">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input class="validateConfirmPassword" type="password" pattern="[^ ][A-Za-z0-9\W+]{8,16}" title="No spaces are allowed" name="c_pass">
							 </div>
					 </div>
					 <div class="register-top-grid">
						    <h3>Security Quesnaire</h3>
								<div>
									<span>Select Question<label>*</label></span>
					                    <select name="question" id="question" class="form-control">
					                        <option disabled selected hidden>Choose any question</option>
					                        <option value="1">What was your childhood nickname?</option>
					                        <option value="2">What is the name of your favourite childhood friend?</option>
					                        <option value="3">What was your favourite place to visit as a child?</option>
					                        <option value="4">What was your dream job as a child?</option>
					                         <option value="5">What is your favourite teacher's nickname?</option>
					                    </select>
					               </div>

					           <div>
								<span>Your Answer<label>*</label></span>
								<input type="text" pattern="[^ ][A-Za-z0-9\W+]+" name="answer">
							 </div>
								
					<div>
					 
					 <div class="register-top-grid">
					 	<div class="clearfix"> </div>
					 	<input type="submit" name="submit" value="signup">
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
				