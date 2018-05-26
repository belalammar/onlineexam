<!DOCTYPE html>
<html lang="en">
<head>
  <title>singin and signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
/* Navbar */
.navbar{
  min-height: 33px !important;
  margin-bottom:0;
  border-radius:0;
}

.navbar-nav > li > a, .navbar-brand{
  padding-top:6px !important;
  padding-bottom:0 !important;
  height: 33px;
}

.navbar-default {
  background-color: #e74c3c;
  border-color: #c0392b;
}
.navbar-default .navbar-brand {
  color: #ecf0f1;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #ffbbbc;
}
.navbar-default .navbar-text {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #ffbbbc;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #ffbbbc;
  background-color: #c0392b;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #ffbbbc;
  background-color: #c0392b;
}
.navbar-default .navbar-toggle {
  border-color: #c0392b;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #c0392b;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ecf0f1;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ecf0f1;
}
.navbar-default .navbar-link {
  color: #ecf0f1;
}
.navbar-default .navbar-link:hover {
  color: #ffbbbc;
}

/* Custom */
.main-color-bg{
  background-color: #e74c3c !important;
  border-color: #c0392b !important;
  color:#ffffff !important;
}
          /* Header */
#header{
  background:#333333;
  color:#ffffff;
  padding-bottom: 10px;
  margin-bottom: 15px;
}

#header .create{
  padding-top: 20px;
}

          
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
          
/* Footer */
#footer{
  background:#333333;
  color:#ffffff;
  text-align:center;
  padding:30px;
  margin-top:30px;
}


@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ecf0f1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffbbbc;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffbbbc;
    background-color: #c0392b;
  }
}
</style></head>

<body>
 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">online exam</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin  <small> online exam</small></h1>
          </div>
        </div>
      </div>
    </header>




	<div class="container">
		<div class="row">
			     <div class="col-sm-6">
					  <div class="panel panel-info">
                      <div class="panel-heading"> ادخل مايلي </div>
						<div class="panel-body">
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						
						
						?>
							  <form role="form" action="signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email"> الايميل  :</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="  ادخل الايميل">
								</div>
								<div class="form-group">
								  <label for="pwd">  الباسورد :</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder=" ادخل الباسورد ">
								</div>
								<button type="submit" class="btn btn-default"> دخول </button>
							  </form>
						  </div>
						  </div>
					  </div>
				 
				   <div class="col-sm-6">
							<div class="panel panel-info">
								
								<div class="panel-heading"> سجل دخولك </div>
							<div class="panel-body">
							<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
							?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name"> الاسم :</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder=" ادخل الاسم ">
								</div>
								<div class="form-group">
								  <label for="email">الايميل:</label>;
								  <input type="email" class="form-control" name="e" id="email" placeholder="ادخل الايميل ">
								</div>
								<div class="form-group">
								  <label for="pwd">الباسورد:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<div class="form-group">
								  <label for="pwd"> ارفع صورتك من فضلك</label>
								  <input type="file" class="form-control" name="img" >
								</div>
								<button type="submit" class="btn btn-default">  الدخول </button>
							  </form>
						  </div>
						  </div>
			      </div>
	   </div>
   </div>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

