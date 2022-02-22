<?php 

class post {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM post');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}
	static public function getpost($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM post WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$post = $stmt->fetch(PDO::FETCH_OBJ);
			return $post;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$query = 'INSERT INTO post (title,description,picture,type,userId)
		VALUES (:title,:description,:picture,:type,:userId)';
		$stmt = DB::connect()->prepare($query);
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':description',$data['description']);
		$stmt->bindParam(':picture',$data['picture']);
		$stmt->bindParam(':type',$data['type']);
		$stmt->bindParam(':userId',$_SESSION['user-id']);
		

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		
	}
	static public function update($data){
		$query = 'UPDATE post SET title= :title,description= :description,picture=:picture,type=:type WHERE id=:id';
		$stmt = DB::connect()->prepare($query);
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':description',$data['description']);
		$stmt->bindParam(':picture',$data['picture']);
		$stmt->bindParam(':type',$data['type']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		
	}

	static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM post WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function searchpost($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM post WHERE title LIKE ? OR description LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$posts = $stmt->fetchAll();
			return $posts;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
}
