<!DOCTYPE html>
<html>
<head><title>log in page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css"> 
  #mydiv {
    position:absolute;
    top: 50%;
    left: 50%;
    margin-top: -9em; 
    margin-left: -11em;
    border: 1px solid #ccc;
    background-color: #f3f3f3;
}
body, html {
    height: 100%;
}

.bg { 
    background-image: url("bg1.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
</head>
<body>
  <div class="bg"></div>
  <div class="row">
  <div class="col-sm-5" style="background-color:lavender;"></div>
  <div class="col-sm-2 form-group" id="mydiv" style="background-color:lavender;">
  <form class=".form-horizontal" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <br> <p class="text-info"><label class=".control-label"><span class="glyphicon glyphicon-user"></span> USERNAME: </label><input name="username" placeholder="Enter username" class="form-control"/><br>
    <label class=".control-label"><span class="glyphicon glyphicon-eye-close"></span> PASSWORD: </label><input type="password" name="password" placeholder="Enter password" class="form-control" /><br>
    <div class="text-center"><input type="submit" value="SAVE" name="submit" class="btn btn-info"></div>
    <br></p>
    <?php
  global $username;
  if(isset($_POST["username"])){
    $username=$_POST["username"];
  }
  if(isset($_POST["password"])){  
    $password=$_POST["password"];
  }
?>
</form>
</div>
<div class="col-sm-5" style="background-color:lavender;"></div>
</div>
</body>
</html>
