<?php 
  session_start(); 
   if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
    header('Location: index.php?login=error2');
   }
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <? include("navbar.php")?>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="open_call.php">
                    <img src="./images/formulary_open_call.png" width="70" height="70">
                  </a>
                  
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consult_call.php">
                    <img src="./images/formulary_consult_call.png" width="70" height="70">
                  </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>