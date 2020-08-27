<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: register.php');
  }
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style type="text/css">
          
            html {
              overflow: hidden;
            }

            body {
              background-color: #120FA6;
              height: 100%;
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
              overflow: hidden;
              z-index: 0;
            }

            nav {
              top: 10vh;
              text-align: center;
              float: left;
              background: rgba(255, 255, 255);
              position: fixed;
              z-index: 100;
              font-size: 13px;
              width: 6vw;
              font-weight: 300;
              margin-left: 80px;
              visibility: visible;
              border-radius: 5px;
            }
              
            nav ul {
              padding: 2px;
            }

            nav li {
              list-style: none;
              padding: 25px;
              color: #000;
            }

            nav em {
              font-style: normal;
            }

            nav a {
              text-decoration: none!important;
              position: relative;
              z-index: 0;
            }

            nav a, nav a:visited, nav a:active {
              color: #000;
            }

            nav a.active {
              background-color: #fff;
              color: #000;
            }


            .slides {
              width: 550vw;
              height: 100vh;
              -webkit-transition: -webkit-transform 0.8s ease;
              transition: -webkit-transform 0.8s ease;
              transition: transform 0.8s ease;
              transition: transform 0.8s ease, -webkit-transform 0.8s ease;
              z-index: 1;
            }

            .slides .slide {
              height: 100vh;
              width: 100vw;
              float: left;
              text-align: center;
              background-size: cover;
            }

            .slides .slide .content {
              overflow-y: scroll;
              position: relative;
              width: 50%;
              height: 68%;
              left: 40%;
              top: 14%;
              bottom: 10%;
              background: rgba(255, 255, 255);
            }

            .content::-webkit-scrollbar {
              width: 5px;
              height: 8px;
              background-color: rgba(255, 255, 255);
            }

            /* Add a thumb */
            .content::-webkit-scrollbar-thumb {
                background: rgba(250, 250, 250);
            }


            .second-content .container-fluid {
              padding-right: 0px;
              padding-left: 0px;
            }

            .second-content p {
              font-size: 16px;
              color: #000;
              letter-spacing: 0.5px;
              font-weight: 300;
              line-height: 24px;
              margin-bottom: 30px;
            }

            .leftcol{
                margin-left: 180px;
                position: fixed;
                top: 50px;
                width: 30vw;
                height: 80vh;
                z-index: 100;
                text-align: center;
                visibility: visible;
                border-radius: 5px;
                background-color: white;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .toast{
                position: fixed;
                right: 0;
                width: 300px;
                margin-top: 1%;
                z-index: 200;
            }

            @media (max-width: 1000px) {

            nav {
                  top: 0.01vh;
                  height: 50px;
                  background-color: rgba(255,255,255);
                  width: 100%;
                  font-weight: 300;
                  font-size: 1rem;
                  margin-left: 0px;
                  border-radius: 0px;
                  text-align: center;
              }  

              nav li {
              list-style: none;
              padding: 5px 55px 5px 55px;
              color: #000;
              display: inline-block;
              }

              nav em {
                font-style: normal;
              }

              nav a {
                text-decoration: none!important;
                
                z-index: 0;
              }


            .leftcol{
              margin-left: 0px;
              width: 100%;
              height: 90vh;
              border-radius: 0px;
              top: 49px;
            }

            .slides .slide .content {
             display: none;
            }

            .toast{
                margin-top: 10%;
             }

            }


            @media (max-width: 749px) {

            .leftcol{
              margin-left: 0px;
              width: 100%;
              height: 90vh;
              border-radius: 0px;
            }
            .slides .slide .content {
             display: none;
            }
            nav li {
              list-style: none;
              padding: 5px 55px 5px 55px;
              color: #000;
              display: inline-block;
              }

            .toast{
                margin-top: 14%;
             }

            }

            @media (max-width: 450px) {
              
            .slides .slide {
              height: 100vh;
              width: 100vw;
              float: left;
              text-align: center;
              background-size: cover;
            }

            .leftcol{
              margin-left: 0px;
              width:100%;
              height: 90vh;
              border-radius: 0px;
            }
            .slides .slide .content {
             display: none;
            }
            nav li {
              list-style: none;
              padding: 5px 22px 5px 22px;
              color: #000;
              display: inline-block;
              }

            .toast{
                margin-top: 18%;
             }
              
            }

        </style>
        
    </head>

<body>
    
    
    <nav>
      
          <ul>
            <li><a href="#1"><em>1st</em></a></li>
            <li><a href="#2"><em>2nd</em></a></li>
            <li><a href="#3"><em>3rd</em></a></li>
            <li><a href="#4"><em>4th</em></a></li>
            <li><a href="#5"><em>5th</em></a></li>
          </ul>
        
    </nav>

    <div class="toast" data-autohide="false">

      <div class="toast-header">
        <strong class="mr-auto text-primary">
          <!-- notification message -->

          <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
              <h3  style="font-size: 1rem;">
                <?php 
                  echo $_SESSION['success']; 
                  unset($_SESSION['success']);
                ?>
              </h3>
            </div>
          <?php endif ?>

        </strong>
        
        <small class="text-muted">5 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
      </div>

      <div class="toast-body">
        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
          <h6>Welcome <strong><?php echo $_SESSION['username']; ?></strong><br>
            <a href="register.php?logout='1'" style="color: red;">Logout</a> </h6>
        <?php endif ?>

      </div>
  </div>

  
    <div class="leftcol">
      <p>About Me</p>
    </div>
    <div class="slides">

          <div class="slide" id="1">
            <div class="content second-content">
              <div class="container-fluid">
                 <p>Heyy!!</p>
                  
              </div>
            </div>
          </div>
          
          <div class="slide" id="2">
      <div class="content second-content">
                <div class="container-fluid">
                    <p>Heyy!!</p>
                </div>
            </div>
          </div>
          <div class="slide" id="3">
            <div class="content second-content">
                <div class="container-fluid">
                   <p>Hey!!</p>
                </div>
            </div>
          </div>

          <div class="slide" id="4">
            <div class="content second-content">
                <div class="container-fluid">
                   <p>Hey!!</p>
                </div>
            </div>
          </div>

          <div class="slide" id="5">
            <div class="content second-content">
                <div class="container-fluid">
                    <p>Heyy!!</p>
                </div>
            </div>
          </div>
         
          </div>
       
  </div>
        
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><\/script>')</script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      $(document).ready(function(){
        $('.toast').toast('show');
      });
    </script>

    
</body>
</html>
