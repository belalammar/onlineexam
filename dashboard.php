
<!DOCTYPE html>
<html lang="en">
  <head><?php
include "../class/users.php";
$cat=new users;
$category=$cat->cat_shows();
//print_r($category);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>  لوحه التحكم </title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="float:right;margin-left:600px;" class="navbar-brand" href="#"> الامتحانات الاونلاين  </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">  لوحه التحكم </a></li>
            <li><a href="setting.php"> الاعدادت </a></li>
            <li><a href="profile.php"> الصفحه الشخصيه </a></li>
            <li><a href="help.php">  المساعده </a></li>
          </ul>
          <form class="navbar-form navbar-left">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">  صفحه التقارير </a></li>
            <li><a href="#"> صفحه التحليل </a></li>
            <li><a href="#"> صفحه الاختبار</a></li>
          </ul>
          </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"> لوحه التحكم </h1>

          <div class="table-responsive">
            <table class="table table-striped">
			<?php
			if(isset($_GET['msg']) && !empty($_GET['msg']))
			{
				echo "<p> تم ادخال السؤال بنجاح </p>";
			}
			
			?>
			
			
				  <form method="post" action="add_quiz.php">
					<div class="form-group">
					  <label for="text"> السؤال </label>
					  <input type="text" class="form-control" name="qus"  placeholder="Enter question">
					</div>

					<div class="form-group">
					  <label for="text"> الاختيار 1</label>
					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1">
					</div>
					<div class="form-group">
					  <label for="text"> الاختيار2</label>
					  <input type="text" class="form-control" name="op2"  placeholder="Enter option-2">
					</div>
					
					<div class="form-group">
					  <label for="text"> الاختيار 3</label>
					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3">
					</div>
					
					<div class="form-group">
					  <label for="text">الاختيار4</label>
					  <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4">
					</div>
					<div class="form-group">
					  <label for="text"> الاجابه </label>
					  <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer">
					</div>
						<div class="form-group">
						   
						   <select class="form-control" id="sel1" name="cat">
						   
								<option value="" disabled>  اختيار القسم </option>
								<?php
								foreach($category as $c)
								{
									echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
								}
								
								?>								
						  </select>
						</div>
					<button type="submit" class="btn btn-default"> ادخال </button><br>
				  </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
	  
