<?php

include "db.php";
if (isset($_POST["Fname"])) {

  $Username = $_POST["Username"];
	$Address = $_POST['Address'];
	$Department = $_POST['Department'];
	$Gender = $_POST['Gender'];
	$Password = $_POST['Password'];
	$repassword = $_POST['repassword'];
  $Mobile_no = $_POST['Mobile_no'];
	$Fname = $_POST["Fname"];
	$Lname = $_POST["Lname"];
	$Email = $_POST['Email'];
	$Position = $_POST['Position'];
  $Year = $_POST['selectionzq'];
  $IDnumX = $_POST['IDnum'];
  $IDnum =  $Year . $IDnumX ;

	$name = "/^[a-zA-Z ]+$/";
//	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";



if(empty($Username) || empty($Address) || empty($Department) || empty($Gender) || empty($Password) ||
	empty($repassword) || empty($Mobile_no) || empty($Fname) || empty($Lname) || empty($Email) || empty($Position) || empty($IDnumX) || empty($IDnum) || empty($Year)){

		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all fields!</b>
			</div>
		";
		exit();
	} else {
		if(!preg_match($name,$Fname)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Input First Name $Fname is not valid!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($name,$Lname)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Input Last Name $Lname is not valid!</b>
			</div>
		";
		exit();
	}
//	if(!preg_match($emailValidation,$Email)){
//		echo "
//			<div class='alert alert-warning'>
//				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//				<b>Input Email $Email is not valid!</b>
//			</div>
//		";
//	exit();
//	}

	if(strlen($Password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password must be 8 characters and up</b>
			</div>
		";
		exit();
	}

	if($Password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is not the same</b>
			</div>
		";
	}
	if(!preg_match($number,$Mobile_no)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $Mobile_no is not valid</b>
			</div>
		";
		exit();
	}


  if(!preg_match($number,(str_replace('-', '0', $IDnum )))){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>ID number $IDnum is not valid</b>
      </div>
    ";
    exit();
  }
	if((strlen($Mobile_no) > 12) or (strlen($Mobile_no) < 10) ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number is not 11 digits. Can you count? </b>
			</div>
		";
		exit();
	}

  if(!(strlen($IDnumX) < 6 and strlen($IDnumX) > 4)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>ID Number error! re-check it </b>
        <small><br />(- dont remove the dash -)</small>
			</div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT UID FROM user_information WHERE Email = '$Email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);

  $sql = "SELECT UID FROM user_information WHERE Username = '$Username' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_emailz = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available. Try Another email address</b>
        <b>(could be that your DB has no account on it. retry again)</b>
			</div>
		";
		exit();
	}
  else if($count_emailz > 0){
    echo "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Username is already taken. Try Another username</b>
          <b>(could be that your DB has no account on it. retry again)</b>
      </div>
    ";
    exit();
  }
  else {
		$xpassword = md5($Password);
		$sql = "INSERT INTO `user_information`
		(`UID`,`Username`, `Address`, `Department`,
		`Gender`, `Password`, `Mobile_no`, `Fname` , `Lname` , `Email` , `Position` , `IDnum`)
		VALUES (NULL, '$Username', '$Address', '$Department',
		'$Gender', '$xpassword', '$Mobile_no', '$Fname' , '$Lname','$Email' , '$Position', '$IDnum')";

		$run_query = mysqli_query($con,$sql);

		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $Fname;
		$ip_add = getenv("REMOTE_ADDR");

$sql = "UPDATE college_rating SET UID = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND UID = -1";
  //  $sql = "UPDATE college_rating SET UID = 1 ";


		if(mysqli_query($con,$sql)){
			echo "register_success";

exit();
		}
		else {echo "somethings wrong "; exit();}
	}
	}

}



?>
