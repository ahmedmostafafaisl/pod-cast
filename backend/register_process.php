<?php 

require_once('../classes/User.php');
require_once('../helpers/save_image.php');
require_once('../helpers/validator.php');
session_start();
var_dump($_REQUEST);
$errors = validator($_REQUEST, [
	'First_name' => 'required|string|min:3|max:50',
	'First_name' => 'required|string|min:3|max:50',
	'email' => 'required|email|string|min:10|max:255|unique:users,email',
	'password' => 'required|string|min:8',
	'phone' => 'required',
	'age' => 'required',
]);

$result=save('user',$_FILES);
if ($result) {
    $_REQUEST['avatar']=save('user',$_FILES);
}else{
    $errors['avatar']='insert valied image';
}

if (count($errors) > 0) {
	$_SESSION['errors'] = $errors;
	header('location:../sign_up.php');
    // var_dump($_SESSION['errors']);
}else{
    
    if(User::store($_REQUEST))
    {
        //  echo 'sظuccessfully!!!!!!!!!!';
        header('location:../login.php');   
    }

}