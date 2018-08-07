<?php
session_start();

$db=mysqli_connect("localhost","root","","roshan");

if (isset($_POST["submit"]))
{


$username = $_POST['username'];
$password = $_POST['password'];


$sql=" SELECT * FROM admins WHERE username='$username' AND password='$password'";
$result=mysqli_query($db,$sql);

if (mysqli_num_rows($result)==1)
{
 $_SESSION['message']="You are now logged in !!!";
 $_SESSION['username']=$username; 
 header("location:inner.php");
  
}

else
  {
    $_SESSION['message'] ="Invalid username/password";
    
  }

}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css"> 
  #mydiv {
    position:absolute;
    top: 50%;
    left: 35%;
    margin-top: -9em; 
    margin-left: -11em;
    border: 2px solid #ccc;
    background-color: #f3f3f3;
    background-image: url("bg6.jpg");
}
body, html {
    height: 100%;
}
.bg { 
    background-image: url("bg11.jpeg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#error_msg{
  width:100%;
  height:40px;
  border:1px solid #FF0000;
  background: #FFB9B8;
  color:#FF0000;
  text-align: center;
  padding-top: 10px;

}
</style>
</head>

<body>
  <div class="bg"></div>
  <div class="row">
  <div class="col-sm-5" style="background-color:lavender;"></div>
  <div class="col-sm-2 form-group" id="mydiv" style="background-color:lightgray;">

    <?php
    if (isset($_SESSION['message']))
    {
      echo "<div id='error_msg'>".$_SESSION['message']."</div>";
      unset($_SESSION['message']);
    }
    ?>
  <form class=".form-horizontal" method="post" action="main.php">
   <br> <p class="text-info"><label class=".control-label"><span class="glyphicon glyphicon-user"></span> USERNAME: </label><input name="username" placeholder="Enter username" class="form-control"/><br>
    <label class=".control-label"><span class="glyphicon glyphicon-eye-close"></span> PASSWORD: </label><input type="password" name="password" placeholder="Enter password" class="form-control" /><br>
    <div class="text-center"><input type="submit" value="LOGIN" name="submit" class="btn btn-info"></div>
    <br></p>
   
</form>
</div>
<div class="col-sm-5" style="background-color:lavender;"></div>
</div>
</body>


</html>