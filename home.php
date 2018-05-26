<?php
include("class/users.php");
$email=$_SESSION['email'];
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
   <link rel="stylesheet" href="css/right.css">
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
      
 
/* Header */
#header{
  background:#333333;
  color:#ffffff;
    padding: 30px;
  padding-bottom: 10px;
  margin-bottom: 15px;
}


      .login{
    box-sizing: border-box;
    background-color: #fff;
    box-shadow: 0 2px 4px 0 rgba(181,181,181,.7);
    z-index: 1;
    border:1px solid#ccc;
    width:450px; 
    height:500px;
    padding: 0 5px;
    border-top: 1px solid #f1f1f5;
}
  .username-challenge {
    max-width: 300px;
    margin: 0 auto;
}
    h1 {
    color:#0e4ba5;
        font-size:30px;
        font-weight:bold;
        text-align:center;
        margin:auto;    
    }
    h2{
            margin-top: 30px;
    margin-bottom: 20px;
    font-size: 25px;
    }
    
    input[name=password] {
    position: relative;
    margin: 0;
    padding: 6px 10px;
    height: 40px;
    border: 0;
    border-radius: 0;
    border-bottom: 1px solid #cfd2d5;
    letter-spacing: normal;
    font-size: .94118em;
    z-index: 1;
    }
    
    input[name=email] {
    position: relative;
    margin: 0;
    padding: 6px 10px;
    height: 40px;
    border: 0;
    border-radius: 0;
    border-bottom: 1px solid #cfd2d5;
    letter-spacing: normal;
    font-size: .94118em;
    z-index: 1;
    }
    
        button{
       background: #1576b2;    
        width: 300px;  
        height: 40px;
        color: aliceblue;
        position: relative;
        font-weight: bold;
        font-size: 24px;    
        margin: 0px;   
        }
    
        button:hover {
        background:154fb2;
    }
    </style>
</head>
<body>
     <header id="header">
      <div class="container">
        <div class="row">
            <h1> online exam </h1>
          </div></div>
    </header>
	  <br><br>
	  <br >
	  
	  <!---- start  start exam ----------->
	
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >  بدا الاختبار </button></center>       
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
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
		</form>
	 
	  
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    <br><br>    <br><br>    <br><br>    <br><br>    <br><br>
    <!-------
   هنا البروفايل 
    ------------->
 
	  <div class="col-sm-4"></div>
       <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>
	  
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

   
   
   
   
    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

