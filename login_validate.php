<?php

session_start();
print_r($_SESSION);
echo "<hr/>";

$usuarios_app = array(
    array('email' => 'admteste@gmail.com', 'senha' => 'abcd'),
    array('email' => 'userteste@gmail.com', 'senha' => '123456'),
);

echo '<pre>';
print_r($usuarios_app);
echo '</pre>';

?>