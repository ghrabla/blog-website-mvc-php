<?php 

class User{

	static public function login($username){
		try{
			$query = 'SELECT * FROM user WHERE username=?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array($username));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO user (username,email,password)
			VALUES (:username,:email,:password)');
		
		$stmt->bindParam(':username',$data['username']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':password',$data['password']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
	}

}

 ?>