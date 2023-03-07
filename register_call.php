<?php 
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $title = str_replace('#', '-', $_POST['title']);
    $category = str_replace('#', '-', $_POST['category']);
    $description = str_replace('#', '-', $_POST['description']);
    
    $texto = $title . "#" . $category . "#" . $description . PHP_EOL;

    $arquivo = fopen('archive.txt', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);
    echo $texto;
?>