<?php 
	if(isset($_POST['submit'])){
		$newpost = new postsController();
		$newpost->addpost();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add post</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>post" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						
						<div class="form-group">
							<label for="depart">title</label>
							<input type="text" name="title" class="form-control" placeholder="title">
						</div>
						<div class="form-group">
							<label for="poste">description</label>
							<textarea type="text" name="description" class="form-control" placeholder="description" rows="5" cols="33"></textarea>
						</div>
						<div class="form-group">
							<label for="date_emb">picture</label>
							<input type="file" name="picture" class="form-control" placeholder="picture">
						</div>
						<div class="form-group">
							<select class="form-control" name="type">
								<option value="movie">movie</option>
								<option value="serie">serie</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valide</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>