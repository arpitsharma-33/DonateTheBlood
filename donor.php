<?php	
	
	include ('include/header.php'); 

?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: orange;
		/* background-color:rgb(87, 159, 223); */
		font-size: 17px;
		font-weight: 700;
	}
	.donors_data{
		background-color:whitesmoke;
		border-radius: 10px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
	.purple-background{
		height:200px;
		background-color:maroon;
	}
	.custo-bar{
		margin-left:256px;
		height: 3px;
	width: 29%;
	color: white;
	background-color: white;
	}
	.text-center2{
		color:white;
		margin-left:260px;
	}
</style>
<div class="container-fluid purple-background size">
	<div class="row">
		<div class="col-md-5 offset-md-3">
			<h1 class="text-center2">Donors</h1>
			<hr class="custo-bar">
		</div>
	</div>
</div>




<div class="container" style="padding: 60px 0;">
	<div class="row data">
		
        <?php

                 $sql = "SELECT * FROM donor";
                 $result = mysqli_query($connection,$sql);

				 if(mysqli_num_rows($result)>0){

					while ($row = mysqli_fetch_assoc($result)) {
						if($row['save_life_date']=='0'){

							echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
							<span class="name">'.$row['name'].'</span>
							<span>'.$row['city'].'</span>
							<span>'.$row['blood_group'].'</span>
							<span>'.$row['gender'].'</span>							
							<span>'.$row['email'].'</span>
							<span>'.$row['contact_no'].'</span>
							
                        </div>
						       ';

						}else{

							$date = $row['save_life_date'];
							$start = date_create("$date");
								$end   = date_create();
								$diff  = date_diff( $start , $end );

								//$diffYear = $diff->y;
								$diffMonth = $diff->m;
								//$diffDays = $diff->d;

								// echo $diffYear."   ";
								if ($diffMonth >=3){
									echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
									<span class="name">'.$row['name'].'</span>
									<span>'.$row['city'].'</span>
									<span>'.$row['blood_group'].'</span>
									<span>'.$row['gender'].'</span>							
									<span>'.$row['email'].'</span>
									<span>'.$row['contact_no'].'</span>
									
								</div>
									   ';
		

								}else{
									echo '
									<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
										<span class="name">'.$row['name'].'</span>
										<span>'.$row['city'].'</span>
										<span>'.$row['blood_group'].'</span>
										<span>'.$row['gender'].'</span>
										<h4 class="name text-center">DONATED</h4>
									</div>
										   ';
								}
                             
							
						}
						
					}

				 }else{
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>DATA NOT FOUND</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>'; 				  

				 }

        ?>

	</div>
</div>


<?php	

	include ('include/footer.php'); 

?>
