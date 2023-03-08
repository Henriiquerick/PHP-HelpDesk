<?php

session_start();

$user_autenticated = false;
$user_id = null;
$user_id_perfil = null;

$perfis = array(1 => 'admin', 2 => 'user');

print_r($_POST);


$usuarios_app = array(
    array( 'id' => 1, 'email' => 'admteste@gmail.com', 'password' => 'abcd', 'perfil_id' => 1),
    array( 'id' => 2,'email' => 'userteste@gmail.com', 'password' => '123456', 'perfil_id' => 1),
    array( 'id' => 3,'email' => 'maria@teste.com', 'password' => '123456', 'perfil_id' => 2),
    array( 'id' => 4,'email' => 'joao@teste.com', 'password' => '123456', 'perfil_id' => 2)
);

if($_POST['confirm_password'] != ''){
    $_POST['id'] = 1;
    $admin = 2;
    if($_POST['perfil_id'] == 'on'){
        $admin = 1;
    }
    foreach($usuarios_app as $user){
        if($_POST['id'] == $user['id']){
            $_POST['id'] += 1;
        }
    }
    array_push($usuarios_app, array($_POST['id'], $_POST['email'], $_POST['password'], $admin));
    echo "<pre>";
    print_r($usuarios_app);
    echo "</pre>";
}else{
    $_POST['confirm_password'] = $_POST['password'];
}
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