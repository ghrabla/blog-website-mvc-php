<?php 

class commentsController{

	public function getAllcomments(){
		$comment = comment::getAll();
		return $comment;
	}

    public function getAllByPostId($id){
        return comment::getAllByPostId($id);
    }

	public function getOnecomment(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$comment = comment::getcomment($data);
			return $comment;
		}
	}
	public function findcomments(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$comments = comment::searchcomment($data);
		return $comments;
	} 

	public function addcomment(){
		// if(isset($_POST['submit'])){
            var_dump($_POST);
			$data = array(
				'content' => $_POST['content'],
                'id' => $_POST['id']
			);
			
			$result = comment::add($data);
			if($result === 'ok'){
				Session::set('success','Employé Ajouté');
				Redirect::to('post');
			}else{
				echo $result;
			}
		// }
	}

	public function updatecomment(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'title' => $_POST['title'],
				'description' => $_POST['description'],
				'picture' => $_POST['picture'],
				'type' => $_POST['type'],
			);
			$result = comment::update($data);
			if($result === 'ok'){
				Session::set('success','Employé Modifié');
				Redirect::to('comment');
			}else{
				echo $result;
			}
		}
	}
	public function deletecomment(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = comment::delete($data);
			if($result === 'ok'){
				Session::set('success','Employé Supprimé');
				Redirect::to('comment');
			}else{
				echo $result;
			}
		}
	}

}



?>