<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:x.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1">

		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

		<title>Cybernotes</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		  <script src="https://kit.fontawesome.com/73ed2e87ff.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/styles1.css">
		<link rel="stylesheet" type="text/css" href="animate.css">
		<link rel="stylesheet" type="text/css" href="animate2.css">
		<link rel="stylesheet" type="text/css" href="animate3.css">
	</head>
<body   style=" background-color:#878787;"    onload="disableSubmit()"       >
<div class="wait overlay">
	<div class="loader"></div>
</div>
<p><br/></p>
<p><br/></p>



	  <div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
		 <div class="d-flex justify-content-center">
			 <div class="brand_logo_container">
			 <img src="assets/img/clients/iit-logo.png" class="brand_logo" alt="MSU-IIT Logo">
				 </div>
			 </div>
			 <div  id="signup_msg">
				<!--Alert from signup form-->


			</div>

<b>	<p style="text-align:center; margin-top: 70px; " > Welcome to the MSU-IIT Cybernotes system </p></b>
<div class="d-flex justify-content-center form_container" >

<form onsubmit="return false" id="login">
<div class="input-group mb-3">
<div class="input-group-append">
<span class="input-group-text"> <i class="fas fa-user"></i></span>
</div>
<input type="text" name="Email" id="Email" class="form-control input_user" placeholder="Email/Username/ID-Number" required>
</div>
<div class="input-group mb-3">
<div class="input-group-append">
<span class="input-group-text"> <i class="fas fa-key"></i></span>
</div>
<input type="password" name="Password" id="Password" class="form-control input_pass" placeholder="Password" required>
</div>
<div class="form-group"><div class="custom-control custom-checkbox"><input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline" onchange="activateButton(this)">
<label class="custom-control-label" for="customControlInline">  <center>By clicking here, you agree to the<a href="https://docs.google.com/document/d/1jEf9A6RvzW_-Dw5l5knQxmTLjsPOHdZMkrC6Gy8Vsa0/edit?usp=sharing" target="_blank" class="ml-2">Terms and conditions.</a>    </center></label>
</div></div>

</div>
<div class="row">
	<div class="col-md-6">
<div class="d-flex justify-content-center mt-2 login_container">
<button style="width:85%;" type="submit" name="button" class="btn btn-success " Value="Login" id = "registered">Login</button></div>
</div>
</form>
	<div class="col-md-6">
		<div class="d-flex justify-content-center mt-2 ">
		<button style="width:85%;" name="button2" class="btn btn-secondary " Value="Login22" id = "registered22" data-toggle = "modal" data-target="#myModal3">Guest Login</button></div>
		</div>
</div>
<div class="panel-footer"><div class="test1" id="e_msg"></div></div>

<div class="mt-4">
<div class="d-flex justify-content-center links"> Don't have an account? <a href="./customer_registration.php?register=1" class="ml-2">Sign Up</a>
</div>
<div class="d-flex justify-content-center">
<a href = "#" data-toggle = "modal" data-target="#myModal2" >Forgot your password?</a>
</div>


		 </div>
		 <hr class="featurette-divider">
		 <div class="row">
 		<div class="col-md-6">

 			<div class="d-flex justify-content-center  mt-3 login_container">
 			<button type="button" name="button" class="loginBtn loginBtn--facebook" onclick=" window.open('http://www.facebook.com','_blank')">Login with facebook</button></div>

 			</div>
 			<div class="col-md-6">
 				<div class="d-flex justify-content-center   mt-3 login_container">
 				<button type="button" name="button" onclick=" window.open('http://www.google.com','_blank')"  class="loginBtn loginBtn--google">  Login with google  </button></div>
 				</div>
 		</div>
	<center><button type="button" id="buttonsw" onclick="location.href = 'index.html';"  class="btn btn-primary"><span > <i class="fa fa-mail-reply"></i></span>   Back Home</button></center>
	 </div>
 </div>
</div>
<!-- modal-->

<div class="modal fade animated bounce" id="myModalz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">


        <h4 class="col-12 modal-title text-center" id="myModalLabel">Login Success !</h4>

      </div>
      <div class="modal-body text-center">
        Welcome to Cybernotes!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Redirecting...</button>
      </div>
    </div>
  </div>

</div>
<!-- modal-->

<!-- modal2-->
<div class="modal fade animated tada" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">


        <h4 class="col-12 modal-title text-center" id="myModalLabel">contact marlou !</h4>

      </div>
      <div class="modal-body">
        still working on this feature. why forgot it ? asshole
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal2-->

<!-- modal3-->
<div class="modal fade animated bounceIn" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document"  onload="disableSubmit()">
		<div class="wait overlay">
			<div class="loader"></div>
		</div>
		<form onsubmit="return false" id="login2">
    <div class="modal-content">
      <div class="modal-header">


        <h4 class="col-12 modal-title text-center" id="myModalLabel">Guest Login</h4>

      </div>

      <div class="modal-body">
<!--contents-->

				<div class="input-group mb-3">
				<div class="input-group-append">
				<span class="input-group-text"> <i class="fas fa-user"></i></span>
				</div>
				<input type="text" name="EmailN" id="EmailN" class="form-control input_user" placeholder="Temporary Visitor Name" required>
				</div>
				<div class="input-group mb-3">
				<div class="input-group-append">
				<span class="input-group-text"> <i class="fas fa-key"></i></span>
				</div>
				<input type="text" name="PasswordN" id="PasswordN" class="form-control input_pass" placeholder="Visitor ID-Tag Number (issued by guard)" required>
				</div>

				<div class="test1" id="e_msgN"></div>


        <!--contents-->
      </div>
      <div class="modal-footer">
<button class="btn btn-primary login_container" type="submit" Value="LoginN" id = "registeredN" >Let's Cybernotes!</button>

      </div>
    </div>
		</form>
  </div>
</div>
<!-- modal3-->

<!-- shits-->



<script>
 function disableSubmit() {
	document.getElementById("registered").disabled = true;
	document.getElementById("registered22").disabled = true;
 }

	function activateButton(element) {

			if(element.checked) {
				document.getElementById("registered").disabled = false;
					document.getElementById("registered22").disabled = false;
			 }
			 else  {
				document.getElementById("registered").disabled = true;
				document.getElementById("registered22").disabled = true;
			}

	}





</script>







</body>
</html>
