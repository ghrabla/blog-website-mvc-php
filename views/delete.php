<?php 
	if(isset($_POST['id'])){
		$exitpost = new postsController();
		$exitpost->deletepost();
	}
?>