<?php include "inc/header.php"?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Books for sale</h2>
					<!-- Table Start -->
					<table class="table table-bordered table-hover">
					  <thead class="table-dark">
					    <tr>
					      <th scope="col">#SL</th>
					      <th scope="col">Book Name</th>
					      <th scope="col">Author</th>
					      <th scope="col">Genre</th>
					      <th scope="col">Price</th>
					      <th scope="col">Seller Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Phone</th>
					      <th scope="col">Address</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>

					  <tbody>

					  	<?php
					  		$sql = "SELECT * from boidorkar ORDER BY seller ASC";				  		
					  		$readData = mysqli_query($db, $sql);
					  		$i = 0;
					  		while( $row = mysqli_fetch_assoc($readData)){

					  			$id 		= $row['id'];
					  			$book		= $row['book'];
								$author		= $row['author'];
								$genre		= $row['genre'];
								$price		= $row['price'];							
								$seller		= $row['seller'];
								$email		= $row['email'];
								$phone		= $row['phone'];
								$address	= $row['address'];
					  			$i++;
					  			?>

					  			<!-- <th scope="row"><?php echo $id; ?></th> -->

							  	<tr>
							      <th scope="row"><?php echo $i; ?></th>
							      <td><?php echo $book; ?></td>
							      <td><?php echo $author; ?></td>
							      <td><?php echo $genre; ?></td>
							      <td><?php echo $price; ?></td>
							      <td><?php echo $seller; ?></td>
							      <td><?php echo $email; ?></td>
							      <td><?php echo $phone; ?></td>
							      <td><?php echo $address; ?></td>
							      <td>
							      	<div class="action-bar">
							      		<ul>
							      			<li>
							      				<a href="update.php?uid=<?php echo $id;?>">
							      					<i class="fa fa-edit"></i>
							      				</a>
							      			</li>

							      			<li>
							      				<a href="">
							      					<i class="fa fa-trash-o"></i>
							      				</a>
							      			</li>
							      		</ul>							      		
							      	</div>
							      </td>
							    </tr>	

							  	<?php
					  		}
					  	?>
					    			    
					  </tbody>
					</table>
					<!-- Table End -->
				</div>				
			</div>			
		</div>
	</section>


<?php include "inc/footer.php"?>
