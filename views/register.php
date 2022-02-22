<?php 
	if(isset($_POST['submit'])){
		$createUser = new UsersController();
		$createUser->register();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-6 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">register</h3>
				</div>
				<div class="card-body bg-light">
			      	<form method="post" class="mr-1">
			      		
			      		<div class="form-group">
				      		<input type="text" name="username" placeholder="username" class="form-control">
				      	</div>
						<div class="form-group">
				      		<input type="text" name="email" placeholder="email" class="form-control">
				      	</div>
				      	<div class="form-group">
				      		<input type="password" name="password" placeholder="Mot de passe" class="form-control">
				      	</div>
			      		<button name="submit" class="btn btn-md btn-danger">register</button>
			      	</form>
				</div>
				<div class="card-footer">
					<a href="<?php echo BASE_URL;?>login" class="btn btn-link">login</a>
				</div>
			</div>
		</div>
	</div>
</div>