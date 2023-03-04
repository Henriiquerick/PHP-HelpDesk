<?php

session_start();
print_r($_SESSION);
echo "<hr/>";

$usuario_autenticado = false;

$usuarios_app = array(
    array('email' => 'admteste@gmail.com', 'senha' => 'abcd'),
    array('email' => 'userteste@gmail.com', 'senha' => '123456'),
);

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        
    }
    echo '<hr/>';
}

if($usuario_autenticado){ 
    $_SESSION['autenticado'] = 'SIM';
} else{
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
}

// header('Location: home.php');

?>