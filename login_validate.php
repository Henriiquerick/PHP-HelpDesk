<?php

session_start();
print_r($_SESSION);

$user_autenticated = false;
$user_id = null;
$user_id_perfil = null;

$perfis = array(1 => 'admin', 2 => 'user');

$usuarios_app = array(
    array( 'id' => 1, 'email' => 'admteste@gmail.com', 'password' => 'abcd', 'perfil_id' => 1),
    array( 'id' => 2,'email' => 'userteste@gmail.com', 'password' => '123456', 'perfil_id' => 1),
    array( 'id' => 3,'email' => 'maria@teste.com', 'password' => '123456', 'perfil_id' => 2),
    array( 'id' => 4,'email' => 'joao@teste.com', 'password' => '123456', 'perfil_id' => 2)
);

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
        $user_autenticated = true;
        $user_id = $user['id'];
        $user_id_perfil = $user['perfil_id'];
    }
};

if($user_autenticated){
    echo 'Usuario autenticado';
    $_SESSION['autenticado'] = true;
    $_SESSION['id'] = $user_id;
    $_SESSION['perfil_id'] = $user_id_perfil;
    header('Location: home.php?login=Succesfull');
} else {
    $_SESSION['autenticado'] = false;
    header('Location: index.php?login=error');
};
?>