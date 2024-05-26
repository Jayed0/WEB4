<?php include "inc/header.php"?>

		<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<h2>Sell a book</h2>
					<form action="" method="POST">
						<div class="mb-3">
							<label>Book Name</label>
							<input type="text" name="book" class="form-control" required="required">	
						</div>
						<div class="mb-3">
							<label>Author Name</label>
							<input type="text" name="author" class="form-control" required="required">	
						</div>
						<div class="mb-3">
							<label>Genre</label>
							<input type="text" name="genre" class="form-control" required="required">	
						</div>
						<div class="mb-3">
							<label>Price</label>
							<input type="text" name="price" class="form-control" required="required">	
						</div>
						<div class="mb-3">
							<label>Seller Name</label>
							<input type="text" name="seller" class="form-control" required="required">
						</div>
						<div class="mb-3">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required="required">	
						</div>
						<div class="mb-3">
							<label>Phone</label>
							<input type="text" name="phone" class="form-control">
						</div>
						<div class="mb-3">
							<label>Address</label>
							<input type="text" name="address" class="form-control">
						</div>
						<div class="mb-3">							
							<input type="submit" name="registerbtn" class="btn btn-success" value="Sell Book">
						</div>
					</form>

					<?php

						if(isset($_POST['registerbtn']))
						{
							$book		= $_POST['book'];
							$author		= $_POST['author'];
							$genre		= $_POST['genre'];
							$price		= $_POST['price'];							
							$seller		= $_POST['seller'];
							$email		= $_POST['email'];
							$phone		= $_POST['phone'];
							$address	= $_POST['address'];

							$sql = "INSERT INTO boidorkar (book, author, genre, price, seller, email, phone, address) values('$book', '$author', '$genre', '$price', '$seller','$email','$phone','$address')";

							$addBook = mysqli_query($db, $sql);

							if($addBook){
								header("location: index.php");
							} 
							else{
								die("MySQl Database Connection Failed" . mysqli_error($db));
							}
						}
					?>

				</div>
			</div>
		</div>
	</section>

<?php include "inc/footer.php"?>
