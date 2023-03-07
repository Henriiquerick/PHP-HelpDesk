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
        <input class="btn btn-info consultcall" type="submit" value="Consult Call" name="consultCall">
        <input class="btn btn-danger logoff" type="submit" value="Logoff" name="logoff">
      </form>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card_open_call">
          <div class="card">
            <div class="card-header">
              Open call
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="register_call.php">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control">
                        <option>User Creation</option>
                        <option>Printer</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Network</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                          <a class="btn btn-lg btn-warning btn-block" href="home.php" class="linkButton">Return</a>
                        
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Open</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>