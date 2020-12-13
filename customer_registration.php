<?php
if (isset($_GET["register"])) {

	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<title>Cybernotes Registration</title>
		<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://kit.fontawesome.com/73ed2e87ff.js" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">

	</head>
<body style=" background-color:#878787; ">
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
				 <img src="assets/img/clients/iit-logo.png" class="brand_logo" alt="MSU IIT Logo">
					 </div>
				 </div>

			<div class="container-fluid">


					<center>	<div class="col-md-8" id="signup_msg"> </center>
							<!--Alert from signup form-->
						</div>
						<b style="z-index:1; margin-bottom:10px;" ><center>Cybernotes registration page</center></b>
	<hr class="mb-3">
 <form id="signup_form" onsubmit="return false">
						<div class="row">
	  <div class="col-md-6">
	    <div class="form-group">

				<label for="firstname"><th>First Name</th></label>
				<div class="input-group mb-3">
				<div class="input-group-append">
				<span class="input-group-text"> <i class="fas fa-user"></i></span>
				</div>
					<input type="text" id="Fname" name="Fname" class="form-control"></div>

	    </div>
	  </div><!-- /.col -->

	  <div class="col-md-6">
	    <div class="form-group">
				<label for="lastname"><th>Last Name</th></label>
				<div class="input-group mb-3">
				<div class="input-group-append">
				<span class="input-group-text"> <i class="fas fa-user"></i></span>
				</div>
				<input type="text" id="Lname" name="Lname"class="form-control"></div>
	    </div>
	  </div><!-- /.col -->

	</div><!-- /.row -->
<!-- /.row -->

	<div class="row">
<div class="col-md-6">
<div class="form-group">

<label for="firstname"><th>User Name</th></label>
<div class="input-group mb-3">
<div class="input-group-append">
<span class="input-group-text"> <i class="fas fa-user-cog"></i></span>
</div>
<input type="text" id="Username" name="Username" class="form-control"></div>

</div>
</div><!-- /.col -->

<div class="col-md-6">
<div class="form-group">
	<label for="phonenumber"><th>Phone Number</th></label>
	<div class="input-group mb-3">
	<div class="input-group-append">
	<span class="input-group-text"> <i class="fas fa-phone"></i></span>
	</div>
		<input type="text" id="Mobile_no" name="Mobile_no"class="form-control" value="09">
	</div>
</div>
</div><!-- /.col -->

</div><!-- /.row -->



		<div class="row">
	<div class="col-sm-4">


		<div class="form-group">
			<i class="fas fa-address-card"></i>
		      <label for="sel1">Position:</label>
		      <select class="form-control" id="Position" name= "Position">
		        <option>Faculty</option>
		        <option>Student</option>
		        <option>Staff </option>
		      </select>

				</div>


	</div><!-- /.col -->

	<div class="col-sm-4">
		<div class="form-group">
			<i class="fas fa-transgender"></i>
					<label for="sel1">Gender:</label>
					<select class="form-control" id="Gender" name= "Gender">
						<option>Female</option>
						<option>Male</option>
						<option>Others</option>
					</select>

				</div>



	</div><!-- /.col -->

	<div class="col-sm-4">
		<div class="form-group">
			<i class="fas fa-building"></i>
					<label for="sel1">Department:</label>
					<select class="form-control" id="Department" name= "Department">
						<option>CBAA</option>
						<option>CASS</option>
						<option>CCS</option>
						<option>COET</option>
						<option>CON</option>
						<option>CED</option>
						<option>CSM</option>
						<option>Others (Org,DSA,OVCAA etc.)</option>
					</select>

				</div>



	</div><!-- /.col -->

	</div><!-- /.row -->

	<!-- /.row -->

		<div class="row">
	<div class="col-md-6">
	<div class="form-group">
						<label for="email"><th>Email Address</th></label>
						<div class="input-group mb-3">
						<div class="input-group-append">
						<span class="input-group-text"> <i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" id="Email" name="Email"class="form-control">
	</div>
	</div>	</div>

	<div class="col-md-6">
	<div class="form-group">
		<label for="email"><th>ID Number</th></label>

		<div class="input-group mb-3">
		<div class="input-group-append">
		<span class="input-group-text"> <i class="fa fa-address-card"></i></span>
		</div>
		<div class="input-group-btn">
    <button type="button" class="btn btn-default dropdown-toggle form control" data-toggle="dropdown" style="border: 2px solid #ddd; background-color: white;" >

      <span class="caret" id="selectionz" >Year:</span>
			<input  id="selectionzq" name="selectionzq" type="hidden" value="" class="form-control">
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><center><a class="dropdown-item bg-light" href="#" data-value="item1">2017</a></center></li>
      <li><center><a class="dropdown-item bg-light" href="#" data-value="item2">2018</a></center></li>
      <li><center><a class="dropdown-item bg-light" href="#" data-value="item3">2019</a></center></li>
      <li><center><a class="dropdown-item bg-light" href="#" data-value="item4">2020</a></center></li>
			<li><center><a class="dropdown-item bg-light" href="#" data-value="item5">2021</a></center></li>
    </ul>
  </div>
		<input type="text" id="IDnum" name="IDnum"class="form-control" value="-" >
		</div>

	</div>	</div> </div>

		<label for="phonenumber"><th>Address</th></label>
	<div class="input-group mb-3">
	<div class="input-group-append">
	<span class="input-group-text"> <i class="fas fa-house-damage"></i></span>
	</div>
	<input type="text" id="Address" name="Address"class="form-control">
</div>

<div class="row">
	<div class="col-md-6">
						<label for="password "><th>Password</th></label>
						<div class="input-group mb-3">
						<div class="input-group-append">
						<span class="input-group-text"> <i class="fas fa-key"></i></span>
						</div>
							<input type="password" id="Password" name="Password"class="form-control">
					</div></div>
					<div class="col-md-6">
						<label for="password"><th>Re-Enter Password</th></label>
						<div class="input-group mb-3">
						<div class="input-group-append">
						<span class="input-group-text"> <i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="repassword" name="repassword"class="form-control">
					</div></div>
</div>

							<center><input id="registered" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg"> </center>
						<body onload="disableSubmit()">

							<center><div class="panel-footer"><div class="test1" id="e_msg"></div></div></center>

							<center> <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">  I Agree to <a href="https://docs.google.com/document/d/1jEf9A6RvzW_-Dw5l5knQxmTLjsPOHdZMkrC6Gy8Vsa0/edit?usp=sharing"target="_blank">Terms & Coditions</a></center>

								<center>  Already have an account? <a href="login_form.php">Sign-in</a></center>
<hr class="featurette-divider">
<div class="row">
<div class="col-md-6">

	<div class="d-flex justify-content-center  mt-3 login_container">
	<button type="button" name="button" class="loginBtn loginBtn--facebook" onclick=" window.open('http://www.facebook.com','_blank')">Login with facebook</button></div>

	</div>
	<div class="col-md-6">
		<div class="d-flex justify-content-center   mt-3 login_container">
		<button type="button" name="button" onclick=" window.open('http://www.google.com','_blank')" class="loginBtn loginBtn--google">  Login with google  </button></div>
		</div>
</div>
	<center><button type="button" id="buttonsw" onclick="location.href = 'index.html';"  class="btn btn-primary"><span > <i class="fa fa-mail-reply"></i></span>   Back Home</button></center>
	</form>
			</div>

</div></div></div>
<!-- modal-->

<div class="modal fade animated bounce" id="myModalz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">


        <h4 class="col-12 modal-title text-center" id="myModalLabel">Register Success !</h4>

      </div>
      <div class="modal-body text-center" style='color:green;'>
        Success! Please Log-In the credentials.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Redirecting...</button>
      </div>
    </div>
  </div>

</div>
<!-- modal-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
 function disableSubmit() {
	document.getElementById("registered").disabled = true;
 }

	function activateButton(element) {

			if(element.checked) {
				document.getElementById("registered").disabled = false;
			 }
			 else  {
				document.getElementById("registered").disabled = true;
			}

	}
	$(function () {
         $(".dropdown-menu li a").click(function () {
             var selText = $(this).text();

						 $("#selectionz").html(selText);
						  $('#selectionzq').val(selText);
         }); });


</script>

</body>
</html>
	<?php
}



?>
