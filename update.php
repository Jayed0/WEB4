<?php include "inc/header.php"?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<?php 

					if(isset($_GET['uid'])){
						$updateID = $_GET['uid'];

						//Read the data for the specific user from  Database

						$sql = "SELECT * from students WHERE id = '$updateID'";
						$rData = mysqli_query($db, $sql); 

						while ($row = mysqli_fetch_assoc($rData)){
							
							$id 		= $row['id'];
					  		$name 		= $row['name'];
					  		$email 		= $row['email'];
					  		$phone	 	= $row['phone'];
					  		$address 	= $row['address'];
						}
					}

				?>

			</div>
		</div>
	</div>
</section>


<?php include "inc/footer.php"?>