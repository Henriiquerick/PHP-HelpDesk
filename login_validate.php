<?php

session_start();
print_r($_SESSION);

$user_autenticated = false;

$usuarios_app = array(
    array('email' => 'admteste@gmail.com', 'password' => 'abcd'),
    array('email' => 'userteste@gmail.com', 'password' => '123456'),
);

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
        $user_autenticated = true;
    }
};

if($user_autenticated){
    echo 'Usuario autenticado';
    $_SESSION['autenticado'] = true;
} else {
    $_SESSION['autenticado'] = false;
    header('Location: index.php?login=error');
};
?>