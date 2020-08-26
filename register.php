<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
<img class='navbar-band' src="images/todo.png" height='60px' width='120px' alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  </div>
</nav>

<div class="col-12">
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Register Here.</h3> 
                <form action="register.php" method="POST">
                  <?php include('errors.php'); ?>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Username *" name="username" value="<?php echo $username; ?>" />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email *" name="email" value="<?php echo $email; ?>"  />
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" name="password_1"/>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password *" name="password_2" />
                    </div>

                    <div class="form-group" >
                        <input type="submit" class="btnSubmit" value="Sign Up" name="reg_user"/>

                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Login Here.</h3>
                <form method="POST" action="register.php">
                  <?php include('errors1.php'); ?>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Username *" name="username" />   
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" name="password"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" name="login_user"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>