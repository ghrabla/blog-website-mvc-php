<?php 

class postsController{

	public function getAllposts(){
		$post = post::getAll();
		return $post;
	}

	public function getOnepost(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$post = post::getpost($data);
			return $post;
		}
	}
	public function findposts(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$posts = post::searchpost($data);
		return $posts;
	} 

	public function addpost(){
		if(isset($_POST['submit'])){
			$data = array(
				'title' => $_POST['title'],
				'description' => $_POST['description'],
				'picture' => 'assest/pictures/' . $_POST['picture'],
				'type' => $_POST['type'],
				
			);
			
			$result = post::add($data);
			if($result === 'ok'){
				Session::set('success','post added');
				Redirect::to('post');
			}else{
				echo $result;
			}
		}
	}

	public function updatepost(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'title' => $_POST['title'],
				'description' => $_POST['description'],
				'picture' => $_POST['picture'],
				'type' => $_POST['type'],
			);
			$result = post::update($data);
			if($result === 'ok'){
				Session::set('success','Employé Modifié');
				Redirect::to('post');
			}else{
				echo $result;
			}
		}
	}
	public function deletepost(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = post::delete($data);
			if($result === 'ok'){
				Session::set('success','Employé Supprimé');
				Redirect::to('post');
			}else{
				echo $result;
			}
		}
	}

}



?>