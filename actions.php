<?php
$home = false;
$consult_call = false;
function actions(){
        switch(true){
            case $_POST['logoff']:
                session_start();
                session_destroy();
                header('Location: index.php');
                break;
            
            case $_POST['openCall']:
                header('Location: open_call.php');
                break;
    
            case $_POST['consultCall']:
                header('Location: consult_call.php');
                break;
            
            case $_POST['home']:
                header('Location: home.php');
                break;
        };
    }
    actions();
?>