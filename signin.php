<?php 

	//include header file
	include ('include/header.php');

	if(isset($_POST['SignIn'])){

		if(isset($_POST['email']) && !empty($_POST['email'])){
                         
			$email = $_POST['email'];

	 }else{
		  $emailError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>PLEASE FILL THE EMAIL FIELD.</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		 </button>
		 </div>';
	 }       

	



	if(isset($_POST['password']) && !empty($_POST['password'])){
                         
		$password = $_POST['password'];

		$password = md5($password);

 }else{
	  $passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>PLEASE INSERT PASSWORD.</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	 </button>
	 </div>';
 } 

     // LOGIN QUERY 

	 if(isset($email) && isset($password)){

               $sql = "SELECT * FROM donor WHERE password='$password' AND email='$email' ";
                $result = mysqli_query($connection,$sql);
			   
				if(mysqli_num_rows($result)>0){
					                        
					while ($row = mysqli_fetch_assoc($result)) {
					     
				
						$_SESSION['name'] = $row['name'];
						$_SESSION['save_life_date'] = $row['save_life_date'];
						

						header('Location: user/index.php');

					}
				}else{
					$submitError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>SORRY! NO RECORD FOUND. PLEASE ENTER VALID EMAIL or PASSWORD</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	 </button>
	 </div>';

				}

	 }







}      

?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 60px 0;

	}
	.cust-bar{
		height: 3px;
	width: 31%;
	color: white;
	background-color: white;
	}
	h1{
		color: white;
	}
	.form-group{
		text-align: left;
	}
	h3{
		color: green;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}

	.custo-bar{
		height: 3px;
	width: 20%;
	color: red;
	background-color: red;
	}
	.form-container{
		background-color: white;
		border: .5px solid black;
		border-radius: 40px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}

	.red-background{
		background-color:maroon;
	}
</style>
 <div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Sign - In</h1>
			<hr class="cust-bar">
		</div>
	</div>
</div>
<div class="container size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>Sign-In</h3>
		<hr class="custo-bar">



		<?php
if(isset($submitError)) echo $submitError;

?>
		
		<!-- Erorr Messages -->

			<form action="" method="post" >
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email " required>				
				<?php
if(isset($emailError)) echo $emailError;

?>
</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" required class="form-control">
					<?php

if(isset($passwordError)) echo $passwordError;

?>
				</div>
				<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">Sign-In</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'include/footer.php' ?>
