<?php

require_once('../classes/User.php');
require_once('../helpers/validator.php');
session_start();
$errors = validator($_REQUEST, [
	'email' => 'required|email|string|min:10|max:100|exists:users,email',
	'password' => 'required|string|min:6|max:100'
]);
if (count($errors) > 0) {
	$_SESSION['errors'] = $errors;
    header('location:login.php');   
}
$row = DB::query("SELECT * FROM users WHERE email = '{$_POST['email']}' LIMIT 1");
if ($row){
 
    if ($row['password'] == $_REQUEST['password']) {

        $_SESSION['user_id'] = $row['id'];
      // var_dump( $_SESSION);
     //  exit();
        header('location:../sign_up.php');   

    } else {
        $_SESSION['error'] = 'email or password are not found';
        header('location:../login.php');   
    }
}else {
    $_SESSION['error'] = 'email or password are not found';
}

