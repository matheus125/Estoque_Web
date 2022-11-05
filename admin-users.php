<?php 

use \Hcode\PageAdmin;
use \Hcode\Model\User;

$app->get("/admin/users/:id_employees/password", function($id_employees){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$id_employees);

	$page = new PageAdmin();

	$page->setTpl("users-password", [
		"user"=>$user->getValues(),
		"msgError"=>User::getError(),
		"msgSuccess"=>User::getSuccess()
	]);

});

$app->post("/admin/users/:id_employees/password", function($id_employees){

	User::verifyLogin();

	if (!isset($_POST['despassword']) || $_POST['despassword']==='') {

		User::setError("Preencha a nova senha.");
		header("Location: /admin/users/$id_employees/password");
		exit;

	}

	if (!isset($_POST['despassword-confirm']) || $_POST['despassword-confirm']==='') {

		User::setError("Preencha a confirmação da nova senha.");
		header("Location: /admin/users/$id_employees/password");
		exit;

	}

	if ($_POST['despassword'] !== $_POST['despassword-confirm']) {

		User::setError("Confirme corretamente as senhas.");
		header("Location: /admin/users/$id_employees/password");
		exit;

	}

	$user = new User();

	$user->get((int)$id_employees);

	$user->setPassword(User::getPasswordHash($_POST['despassword']));

	User::setSuccess("Senha alterada com sucesso.");

	header("Location: /admin/users/$id_employees/password");
	exit;

});

$app->get("/admin/users", function(){
	
	User::verifyLogin();

	$users = User::listAll();

	$page = new PageAdmin();

	$page->setTpl("users", array(
		"users"=>$users
		));

});

$app->get("/admin/users/create", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("users-create");

});

$app->get("/admin/users/:id_employees/delete", function($id_employees){
	
	User::verifyLogin();

	$user = new User();

	$user->get((int)$id_employees);

	$user->delete();

	header("Location: /admin/users");
	exit;

});

$app->get("/admin/users/:id_employees", function($id_employees){
	
	User::verifyLogin();

	$user = new User();	

	$user->get((int)$id_employees);

	$page = new PageAdmin();

	$page->setTpl("users-update", array(
		"user"=>$user->getValues()
	));

});

$app->post("/admin/users/create", function(){
	
	User::verifyLogin();

	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;

	$user->setData($_POST);

	$user->save();

	header("Location: /admin/users");
	exit;

});

$app->post("/admin/users/:id_employees", function($id_employees){
	
	User::verifyLogin();

	$user = new User();

	//$_POST["idperfil"] = (isset($_POST["idperfil"]))?1:0;

	$user->get((int)$id_employees);
	
	$user->setData($_POST);
	
	$user->update();
	
	header("Location: /admin/users");
	exit;	

});
