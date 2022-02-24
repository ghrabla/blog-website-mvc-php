<?php 
// var_dump($_POST);
	if(isset($_POST['id'])){
		$exitpost = new postsController();
		$post = $exitpost->getOnepost();
	}else{
		Redirect::to('post');
	}
	if(isset($_POST['submit'])){
		$exitpost = new postsController();
		$exitpost->updatepost();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Update post</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>post" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form action="" method="post">
						<input type="hidden" name="id" value="<?php echo $post->id;?>">
						<div class="form-group">
							<label for="title">title</label>
							<input type="text" name="title" class="form-control" placeholder="title"
							value="<?php echo $post->title; ?>"
							>
						</div>
						<div class="form-group">
							<label for="description">description</label>
							<textarea type="text" name="description" class="form-control" placeholder="description" rows="5" cols="33"
							><?php echo $post->description; ?></textarea>
							
							
						</div>
						<div class="form-group">
							<label for="picture">picture</label>
							<input type="text" name="picture" class="form-control" placeholder="picture"
								value="<?php echo $post->picture; ?>">
						</div>
						
						
						<div class="form-group">
							<select class="form-control" name="type">
								<option value="movie" <?php echo $post->type ? 'selected' : ''; ?>>movie</option>
								<option value="serie"
								<?php echo !$post->type ? 'selected' : ''; ?>
								>serie</option>
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