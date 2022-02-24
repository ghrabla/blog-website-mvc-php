<?php 

class UsersController {

	public function auth(){
		$result = User::login($_POST['username']);
		if($result && $result->username === $_POST['username'] && password_verify($_POST['password'], $result->password)){
			$_SESSION['logged'] = true;
			$_SESSION['username'] = $result->username;
			$_SESSION['user-id'] = $result->id;
			Redirect::to('post');    
		}else{
			Session::set('error','password or username is not correct');
			Redirect::to('login');
		}
	}

	public function register(){
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$data = array(
			'username' => $_POST['username'],
			'email' => $_POST['email'],
			'password' => $password,
		);
		$result = User::createUser($data);
		if($result === 'ok'){
			Session::set('success','account created');
			Redirect::to('login');
		}else{
			echo $result;
		}
	}

	static public function logout(){
		session_destroy();
	}


}
