<?php 

class comment {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM comment');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}

    static public function getAllByPostId($id){
        $stmt = DB::connect()->prepare("select * from comment where postId = :id");
        $stmt->execute(["id" => $id]);
        return $stmt->fetchAll();
    }

    static public function getAllByPostIds($ids){
        $stmt = DB::connect()->prepare("select * from comment where postId in :ids");
        $stmt->execute(["ids" => $ids]);
        return $stmt->fetchAll();
    }
	static public function getcomment($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM comment WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$comment = $stmt->fetch(PDO::FETCH_OBJ);
			return $comment;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$query = 'INSERT INTO comment (text,userId,postId)
		VALUES (:text,:userId,:postId)';
		$stmt = DB::connect()->prepare($query);
		$stmt->bindParam(':text',$data['content']);
		$stmt->bindParam(':userId',$_SESSION['user-id']);
		$stmt->bindParam(':postId',$data['id']);
       
        
		

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		
	}
	static public function update($data){
		$query = 'UPDATE comment SET text= :text,userId= :userId,postId=:postId,type=:type WHERE id=:id';
		$stmt = DB::connect()->prepare($query);
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':text',$data['text']);
		$stmt->bindParam(':userId',$data['userId']);
		$stmt->bindParam(':postId',$data['postId']);
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
			$query = 'DELETE FROM comment WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function searchcomment($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM comment WHERE text LIKE ? OR userId LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$comments = $stmt->fetchAll();
			return $comments;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
}
