<?php 

	//include header file
	include ('include/header.php');

?>


<style>

	.ha{
		height: 350px;
		background-color:darkgoldenrod;
		border: 2px solid black;
	}
	h1{
		color: lightgoldenrodyellow;
	}

	p{
		color: white;
	}
	.cus-bar{
		height: 3px;
	width: 31%;
	color: black;
	background-color: black;
	}

	.center-aligned2{	
	display: table;
	margin: 0 auto;
}

	
	.cust-bar{
		height: 3px;
	width: 46%;
	color: black;
	background-color: black;
	}

	.contactus{
		background-color:rgb(4, 4, 87);
	}

	.ali{
		 font-size:21px;
		 right: 50%;
		 color: red;
		 /* background-color:lightgoldenrodyellow; */
		
		margin-left: 50%;
		border-radius: 30px;
		 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		 margin-left: 40px;
	}
.btn-dange{
	/* cursor: pointer; */
	/* padding: -10px -10px; */
	/* margin: -10px -10px; */
	font-size: 50px;
	font-weight: 500px;
	border-style: none;
	
	color: black;
	
}
#re{
	color: black;
	
}
	/* .ali:hover{
		color:green;
		text-transform: lowercase;
		font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
		font-weight: 700px;
		font-size: 25px;
	} */
	.header-img1{
	 
	 background: url(./img/pexels-karolina-grabowska-4040698.jpg) center fixed;
	   -webkit-background-size: cover;
	-moz-background-size: cover;
	  background-size: cover;
	  -o-background-size: cover;
	  height: auto;
	  min-height: 700px;
	  padding: 10px;
	  color: white;
	  font-weight: 700;
	}
	h1{
		color: black;
	}
	ul li{
		color: white;
	}
	.card{
		background-color: black;
	}
.for{
	
	border: 5px solid rgb(230, 70, 25);
	background-image: url(./img/pexels-moose-photos-1037992.jpg) ;
	background-repeat: no-repeat;
    background-size:cover;

}
.colo{
	background-color: whitesmoke;
}

.header2{
	margin-left: -320px;
	padding-left: -100px;
	
	text-align: left;
	/* border: 1px solid black; */

}
.btn-danger1{
	color: white;
		background-color:rgb(58, 29, 29);
		width:100px;
		border-radius:20px;
	}
.pa{
	color: darkgreen;
}
.rows{
	border: 2px solid black;
	background-repeat;
}

.header2 h1 p{
	color: black;
}
</style>

<div class="container-fluid header-img1">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header2">
							<h1 >Donate the blood, save the life</h1>
						<p class="pa">Donate the blood to help others.</p>
						</div>
                        <br>
<br>
<br>
<br>					<h1 class="text-center">Search Donors</h1>
						<hr class="cust-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center for" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 230px; height: 50px;  padding-left: 10px; margin-left:43px;" name="city" id="city" class="form-control demo-default" required>
								<option value="">-- Select your city --</option><optgroup title="Rajasthan" label="&raquo; Rajasthan"></optgroup><option value="Ajmer" >Ajmer</option><option value="Alwar" >Alwar</option><option value="Banswara" >Banswara</option><option value="Barmer" >Barmer</option><option value="Bharatpur" >Bharatpur</option>
	<option value="Bhilwara" >Bhilwara</option><option value="Bikaner" >Bikaner</option><option value="Bundi" >Bundi</option><option value="Chittorgarh" >Chittorgarh</option><option value="Churu" >Churu</option>
	<option value="Dholpur" >Dholpur</option><option value="Dungarpur" >Dungarpur</option><option value="Sriganganagar" >Sriganganagar</option><option value="Jaipur" >Jaipur</option><option value="Jaisalmer" >Jaisalmer</option><option value="Jalore" >Jalore</option>
	<option value="Jhalawar" >Jhalawar</option><option value="Jhunjhunu" >Jhunjhunu</option><option value="Jodhpur" >Jodhpur</option><option value="Kota" >Kota</option><option value="Nagaur" >Nagaur</option>
	<option value="Pali" >Pali</option><option value="Sikar" >Sikar</option><option value="Sirohi" >Sirohi</option><option value="Sawai Madhopur" >Sawai Madhopur</option><option value="Tonk" >Tonk</option><option value="Udaipur" >Udaipur</option>
	<option value="Baran" >Baran</option><option value="Dausa" >Dausa</option><option value="Rajsamand" >Rajsamand</option><option value="Hanumangarh" >Hanumangarh</option>
	<option value="Kotputli" >Kotputli</option><option value="Ramganjmandi" >Ramganjmandi</option><option value="Karauli" >Karauli</option><option value="Pratapgarh" >Pratapgarh</option><option value="Beawer" >Beawer</option><option value ="Didwana" >Didwana</option>
	<option value="Abu Road" >Abu Road</option><option value="Balotra" >Balotra</option><option value="Bhiwadi" >Bhiwadi</option>
	<option value="Chomu" >Chomu</option><option value="Kishangarh" >Kishangarh</option><option value="Phalodi" >Phalodi</option><option value="Sujangarh" >Sujangarh</option></select>					
</div>
							<div class="form-group center-aligned ">
								<select name="blood_group" id="blood_group" style="padding-left:10px ; width: 230px;  height: 50px;" class="form-control demo-default  margin10px">
								<option value="">-- Blood group --</option>
									<option value="AB+">AB+</option>
									<option value="A+">A+</option>
									<option value="O+">O+</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="A-">A-</option>
									<option value="O-">O-</option>
									<option value="AB-">AB-</option>																	
								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger1" style="margin-left:18px;">Search</button>
							</div>				
						</form>
						<br>
						<br>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid ha">
<br>
<br>
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color:darkslategrey; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="cus-bar">
						<p class="text-center ">
							<br>
							Blood donation refers to a practice where people donate their blood to people so it helps them with their health problems.
							<br>
							Giving blood is a demonstration of worry for individuals who are needing life-sparing blood. Nothing could esteem more than blood for an individual who requires it for sparing his/her own life or for the life of somebody he/she thinks about.
						</p>	
						<a href="donate.php" class="btn btn-default btn-lg text-center colo center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			<br>
			<br>
			<br>
			<br>


			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">IMPORTANCE</h3>
								<img src="img/blood2.webp" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									<br>
									Today, most medical care depends on a steady supply of blood from donors, as one in seven people entering the hospital need blood. For Moffitt, as cancer care increases, so does the demand for blood and platelet donations. An adequate amount of blood is needed in all health care facilities to meet the urgent need for patients facing trauma and other lifesaving procedures, such as blood transfusions – which saves millions of lives each year.It is a simple procedure that can be done within an hour.			</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">BENEFITS</h3>
								<img src="img/blood1.jpeg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									<br>
								Donating blood has benefits for your emotional and physical health. According to a report by the Mental Health Foundation, helping others can:
										
										<ul>
										<li>reveal potential health problem</li>
										<li>reduce stress</li>	
										<li>improve your emotional well-being</li>	
										<li>benefit your physical health</li>	
										<li>help get rid of negative feelings</li>	
										<li>Reduce harmful iron stores</li> 
										<li>Can help your liver stay healthy</li>	
										</ul>
												</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">OVERALL HEALTH</h3>
								<img src="img/donation.jpeg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									In 2007, researchers looked at the data of over 1 million blood donors. Among the participants, there was a 30%Trusted Source lower chance of dying from any cause and a 4% lower chance of developing cancer. The authors concluded that “blood donors enjoy better than average health.”

A 2015 studyTrusted Source took a fresh look at the same data. After adjusting for other factors, the researchers concluded that for each annual donation, a person’s risk of dying from any cause fell by 7.5%, on average.
			</p>
							</div>
   			 		</div>
 			</div>
 		</div>
<br>
<br>

			<!-- end aboutus section -->
			<div class="row contactus">
					<div class="col-md-6 offset-md-3">
						<hr class="white-bar">

							

					</div>
				</div>
				
				<!-- <a href="#" class="ali text-center center-aligned">&uarr;</a> -->
		
					<button class="btn btn-lg btn-dange center-aligned2" type="submit" name="delete_account"><a id="re" href="#">&#8593;</a> </button>
				
 
<!-- include footer file -->
  <!-- include ('include/footer.php'); -->















  
