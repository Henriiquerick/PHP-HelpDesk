<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="./images/logo.png" class="d-inline-block logo" alt="">
        App Help Desk
      </a>
    </nav>
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Register
            </div>
            <div class="card-body">
              <form action="login_validate.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                  <input name="confirm_password" type="password" class="form-control" placeholder="confirm password">
                </div>
                <div class="form-group">
                  <input name="id" type="text" class="form-control" disabled>
                </div>
                <div class="form-group">
                  <label for="perfil_id">Admin?</label>
                  <input name="perfil_id" id="perfil_id" type="Checkbox" class="form-control">
                </div>
                <div class="form-group">
                  <p>Have account? <a class='link' href="index.php">Login</a></p>
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Register</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>