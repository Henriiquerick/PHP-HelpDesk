<?php
    print_r($_POST);
    switch(true){
        case $_POST['logoff']:
            session_start();
            session_destroy();
            header('Location: index.php');
        
        case $_POST['openCall']:
            header('Location: open_call.php');
    };
    if($_POST['logoff']){
        
    }
    
?>