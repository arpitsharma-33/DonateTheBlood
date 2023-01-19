<?php 
  //include header file
  include ('include/header.php');

   if(isset($_POST['submit'])){

        if(isset($_POST['term']) === true){

               if(isset($_POST['name']) && !empty($_POST['name'])){
                         
				          if(preg_match('/^[A-Za-z\s]+$/', $_POST['name'])){

                                    $name = $_POST['name'];                                                                                                                                                                                     

						  }else{
							$nameError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>ONLY LOWERCASE AND UPPERCASE AND SPACE CHARACTERS ARE ALLOWED.</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
						  }

			   }else{
				$nameError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>PLEASE FILL THE NAME FIELD.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';

			   }


			   if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
                           
				       $blood_group = $_POST['blood_group'];
			
			    }else{
			      $blood_groupError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			      <strong>PLEASE SELECT BLOOD GROUP.</strong>
			    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			    </button>
			    </div>';
			    }


			    if(isset($_POST['gender']) && !empty($_POST['gender'])){
                         
				       $gender = $_POST['gender'];

	            }else{
	                 $genderError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	                 <strong>PLEASE SELECT YOUR GENDER.</strong>
	                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	     	        <span aria-hidden="true">&times;</span>
	                </button>
	                </div>';
		        }       
		        


		if(isset($_POST['day']) && !empty($_POST['day'])){
                         
			$day = $_POST['day'];

	}else{
		$dayError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>PLEASE SELECT DAY INPUT.</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
		</button>
		 </div>';
	}
 
	 
	if(isset($_POST['month']) && !empty($_POST['month'])){
                         
		$month = $_POST['month'];

}else{
	$monthError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>PLEASE SELECT MONTH INPUT.</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 <span aria-hidden="true">&times;</span>
	</button>
	 </div>';
}


if(isset($_POST['year']) && !empty($_POST['year'])){
                         
	$year = $_POST['year'];

}else{
$yearError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>PLEASE SELECT YEAR INPUT.</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
</button>
 </div>';
}


 

//email check
if(isset($_POST['email']) && !empty($_POST['email'])){
	$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
                         
	if(preg_match( $pattern, $_POST['email'])){

		$check_email = $_POST['email'];

		    $sql = "SELECT email FROM donor WHERE email='$check_email' ";

			$result = mysqli_query($connection, $sql);
			
			if(mysqli_num_rows($result)>0){
				$emailError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>THIS EMAIL ALREADY EXISTS.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';

			}else{
				$email = $_POST['email'];

			}

	}else{
	  $emailError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>PLEASE ENTER A VALID EMAIL ADDRESS.</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';
	}

}else{
$emailError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>PLEASE FILL THE EMAIL FIELD.</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

}




// cintact databse
if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
                         
	if(preg_match('/\d{10}/', $_POST['contact_no'])){

			  $contact = $_POST['contact_no'];                                                                                                                                                                                     

	}else{
	  $contactError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>CONTACT SHOULD CONTAIN ONLY 10 NUMBERS.</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';
	}

}else{
$contactError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>PLEASE FILL THE CONTACT NUMBER FIELD.</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

}





//city check
if(isset($_POST['city']) && !empty($_POST['city'])){
                         
	if(preg_match('/^[A-Za-z\s]+$/', ($_POST['city']))){

			  $city = $_POST['city'];                                                                                                                                                                                     

	}else{
	  $cityError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>ONLY LOWERCASE AND UPPERCASE AND SPACE CHARACTERS ARE ALLOWED.</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';
	}

}else{
$cityError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>PLEASE FILL THE CITY FIELD.</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

}




            // password check
                 if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) &&
				     !empty($_POST['c_password'])){

                               if(strlen($_POST['password'])>=6){

								      if($_POST['password'] == $_POST['c_password']){
										  $password = $_POST['password'];
									  }else{
										$passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
										<strong> PASSWORDS ARE NOT SAME .</strong>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
										</div>';
									  }

							   }else{
								$passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>THE PASSWORD SHOULD CONTAIN ATLEAST 6 CHARACTERS</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>';
								
								}
								
				 }else{
					$passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>PLEASE FILL THE PASSWORD FIELD.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>';
					
					}



					// INSERT DATA INTO DATABASE

					if( isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && 
					isset($year) && isset($email) && isset($contact) && isset($city) && isset($password) &&
					isset($blood_group) ){
 
					$Donordob = $year."-".$month."-".$day;
					$password = md5($password);
					 $sql = "INSERT INTO donor (name,gender,email,city,dob,contact_no,save_life_date,password,blood_group) 
					 VALUES('$name','$gender','$email','$city','$Donordob','$contact','0','$password','$blood_group')";


if(mysqli_query($connection,$sql)){
							header("Location: signin.php");
				
						}else{
							$submitError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>OOPS.. SOMETHING WENT WRONG . DATA NOT INSERTED. TRY AGAIN #</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
				
						}
					}




		
			
		
			}else{
			$termError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>PLEASE AGREE WITH OUR TERMS & CONDITIONS</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';

		}

	
   }
  


?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color:aliceblue;
		border: .5px solid black;
		border-radius:25px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: green;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	.don-background{
		background-color:maroon;
	}
	.cust-bar{
		height: 3px;
	width: 17%;
	color: red;
	background-color: red;
	}
	.cus-bar{
		height: 3px;
	width: 26%;
	color: white;
	background-color:white;
	}
</style>
<div class="container-fluid don-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="cus-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-8 offset-md-2 form-container">
					<h3>Sign-Up</h3>
					<hr class="cust-bar">

					<?php
					if(isset($termError)) echo $termError;
					          if(isset($submitSuccess)) echo $submitSuccess;
							  if(isset($submitError)) echo $submitError;
					?>
					
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post" >
					<div class="form-group">
						<label for="fullname">Full Name</label>
					<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" 
					value="<?php if(isset($name)) echo $name; ?>" >
					
					<?php
					    if(isset($nameError)) echo $nameError;
					    ?>
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				<?php
					    if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>';
					    ?>
                
									<option value="AB+">AB+</option>
									<option value="A+">A+</option>
									<option value="O+">O+</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="A-">A-</option>
									<option value="O-">O-</option>
									<option value="AB-">AB-</option>																	

              </select>
			  <?php
					    if(isset($blood_groupError)) echo $blood_groupError;
					    ?>
            </div><!--End form-group-->
			
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
							        Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;"
									<?php if(isset($gender)) {if($gender=="Female") echo "checked";} ?> >									
									
									<?php
					if(isset($genderError)) echo $genderError;
					?>
								</div><!--gender-->
								
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>

              <select class="form-control demo-default" id="day" name="day" style="margin-bottom:10px;" required>

                <option value="">---Date---</option>
				<?php
					    if(isset($day)) echo '<option selected="" value="'.$day.'">'.$day.'</option>';
					    ?>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>

              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				<?php
					    if(isset($month)) echo '<option selected="" value="'.$month.'">'.$month.'</option>';
					    ?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>

              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
				<?php
					    if(isset($year)) echo '<option selected="" value="'.$year.'">'.$year.'</option>';
					    ?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option>
              </select>

			  
            </div><!--End form-group-->
			        <?php
					if(isset($dayError)) echo $dayError;
					?>
					<?php
					if(isset($monthError)) echo $monthError;
					?>
					<?php
					if(isset($yearError)) echo $yearError;
					?>


			        

				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" 
						value="<?php if(isset($email)) echo $email; ?>">
						<?php
					if(isset($emailError)) echo $emailError;
					?>
					</div>
					

					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no"  placeholder=" 00******" class="form-control" required pattern="^\d{10}$" title="11 numeric characters only" maxlength="10"
			  value="<?php if(isset($contact)) echo $contact; ?>">
			  <?php
					if(isset($contactError)) echo $contactError;
					?>
			</div><!--End form-group-->

			        

					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>

			  <option value="">-- Select --</option><?php
					    if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>';
					    ?><optgroup title="Rajasthan" label="&raquo; Rajasthan"></optgroup><option value="Ajmer" >Ajmer</option><option value="Alwar" >Alwar</option><option value="Banswara" >Banswara</option><option value="Barmer" >Barmer</option><option value="Bharatpur" >Bharatpur</option>
	<option value="Bhilwara" >Bhilwara</option><option value="Bikaner" >Bikaner</option><option value="Bundi" >Bundi</option><option value="Chittorgarh" >Chittorgarh</option><option value="Churu" >Churu</option>
	<option value="Dholpur" >Dholpur</option><option value="Dungarpur" >Dungarpur</option><option value="Sriganganagar" >Sriganganagar</option><option value="Jaipur" >Jaipur</option><option value="Jaisalmer" >Jaisalmer</option><option value="Jalore" >Jalore</option>
	<option value="Jhalawar" >Jhalawar</option><option value="Jhunjhunu" >Jhunjhunu</option><option value="Jodhpur" >Jodhpur</option><option value="Kota" >Kota</option><option value="Nagaur" >Nagaur</option>
	<option value="Pali" >Pali</option><option value="Sikar" >Sikar</option><option value="Sirohi" >Sirohi</option><option value="Sawai Madhopur" >Sawai Madhopur</option><option value="Tonk" >Tonk</option><option value="Udaipur" >Udaipur</option>
	<option value="Baran" >Baran</option><option value="Dausa" >Dausa</option><option value="Rajsamand" >Rajsamand</option><option value="Hanumangarh" >Hanumangarh</option>
	<option value="Kotputli" >Kotputli</option><option value="Ramganjmandi" >Ramganjmandi</option><option value="Karauli" >Karauli</option><option value="Pratapgarh" >Pratapgarh</option><option value="Beawer" >Beawer</option><option value ="Didwana" >Didwana</option>
	<option value="Abu Road" >Abu Road</option><option value="Balotra" >Balotra</option><option value="Bhiwadi" >Bhiwadi</option>
	<option value="Chomu" >Chomu</option><option value="Kishangarh" >Kishangarh</option><option value="Phalodi" >Phalodi</option><option value="Sujangarh" >Sujangarh</option></select>					

	                <?php
					if(isset($cityError)) echo $cityError;
					?>
					</div><!--city end-->

                   

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password (minimun 6 characters)" class="form-control" required pattern=".{6,14}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,14}">
			  <?php
					if(isset($passwordError)) echo $passwordError;
					?>
			</div><!--End form-group-->

			       

            <div class="form-inline">
              <input checked="" type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>