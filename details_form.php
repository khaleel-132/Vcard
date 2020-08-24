<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  
?>

<!DOCTYPE html>
<html>
<head>
	<title> Registration Details</title>
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>

<div class="toast fade show" data-autohide="false" style="position: fixed; right: 0; width: 300px; margin-top: 1%; z-index: 200;">

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

  <div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>General Infomation</h2>
					
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="age" class="company" id="company" placeholder="Age" required>
					</div>
					<div class="form-row">
						<input list="title" name="titles" id="titles" placeholder="Job">
						<datalist id="title">
						  <option value="Web Developer">
						  <option value="Software Developer">
						  <option value="Graphic Designer">
						  <option value="SEO specialist">
						  <option value="Content Writer">
						</datalist>
					</div>
					<div class="form-row">
						<input type="text" name="company" class="company" id="company" placeholder="Company" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="Skills" placeholder="Services You Provide" required>
						</div>
					</div>
					<div class="form-row">
						<textarea type="textbox" rows="03" cols="55" name="about" class="about" id="about" placeholder="Write about yourself..." required></textarea>
					</div>



					<div class="form-group">
						<div class="form-row form-row-1">
							
								Upload your profile photo:
								<input type="file" name="fileToUpload" id="fileToUpload">
								
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							
								Resume:
								<input type="file" name="fileToUpload" id="fileToUpload">
								
						</div>
					</div>
				</div>



				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="street" class="street" id="street" placeholder="Address" required>
					</div>
					<div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" placeholder="Landmark" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code" required>
						</div>
						<div class="form-row form-row-2">
							<select name="District">
							    <option value="place">Alappuzha</option>
							    <option value="Street">Ernakulam</option>
							    <option value="District">Idukki</option>
							    <option value="City">Kannur </option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-row">
						<select name="country">
						    <option value="country">Country</option>
						    <option value="Vietnam">Vietnam</option>
						    <option value="Malaysia">Malaysia</option>
						    <option value="India">India</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="Code +" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div>
					<div class="form-row">
						<input type="text" name="your_acc1" id="your_email" class="input-text"  placeholder="Social media account 1">
					</div>
					<div class="form-row">
						<input type="text" name="your_acc2" id="your_email" class="input-text"  placeholder="Social media account 2">
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<a href="home.php"><input type="submit" name="register" class="register" value="Register"></a>
					</div>
				</div>
			</form>
		</div>
	</div>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>



  <script>
      $(document).ready(function(){
        $('.toast').toast('show');
      });
    </script>
</body>
</html>