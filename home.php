<?php
include("class/users.php");
$email=$_SESSION["email"];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/styling.css">
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
</head>
<body>

<div class="container">
  <h2 style="text-align:center;font-size:24px;font-weight:bold;background-color:#123;color:#fff; padding:20px;
  "> الامتحانات عبر الانترنت </h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="citeexam-boot.php">  الصفحه الرئيسيه </a></li>
    <li><a data-toggle="tab" href="profile.php"> الصفحه الشخصيه </a></li>
            <li><a href="admin/index.php">  لوحه التحكم </a></li>
            <li><a href="login.php"> الدخول </a></li>
            <li><a href="help.php">  المساعده </a></li>
            
    <li style="float:right"><a data-toggle="tab" href="singupppp.php"> صفحه تسجيل الخروج </a></li>
  </ul>
      <br><br><br/>

	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" > بدء  الاختبار</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option> اختيار القسم </option>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="دخول " class="btn btn-primary" /></center>
		</form> 
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    
    
    
    
    <!-------
   هنا البروفايل 
    ------------->
	  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	foreach($profile->data as $prof)
	{?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="35px" height="30px" /></td>
      </tr>
    </tbody>
	<?php 	}?>
  </table>
	  
    </div>
    </div>
    
    <!-------  
    
     هنا القائمه 
       ------>
       
    <div id="menu2" class="tab-pane fade">
      <h3> القائمه </h3>
      <p>
     قائمه  الامتحانات </p>

      <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="citeexam-boot.php">  الصفحه الرئيسيه </a></li>
    <li><a data-toggle="tab" href="profile.php"> الصفحه الشخصيه </a></li>
            <li><a href="admin/index.php">  لوحه التحكم </a></li>
            <li><a href="login.php" > الدخول </a></li>
            <li><a href="help.php">  المساعده </a></li>
        </ul>
            </div>
    
    <div id="" class="tab-pane fade">
      <h3>  تسجيل الخروج </h3>
     
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
