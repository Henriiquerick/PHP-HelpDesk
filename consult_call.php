<? require_once("acess_validator.php")?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="./images/logo.png"  class="d-inline-block logo" alt="logo">
        App Help Desk
      </a>
      <form action="actions.php" method="post">
        <input class="btn btn-warning home_button" type="submit" value="Home" name="home">
        <input class="btn btn-info opencall" type="submit" value="Open Call" name="openCall">
        <input class="btn btn-danger logoff" type="submit" value="Logoff" name="logoff">
      </form>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card_consult_call">
          <div class="card">
            <div class="card-header">
              Consulta call
            </div>
            
            <div class="card-body">
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Call title...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Category</h6>
                  <p class="card-text">Call description...</p>
                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Call title...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Category</h6>
                  <p class="card-text">Call description...</p>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php" class="linkButton">Return</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>