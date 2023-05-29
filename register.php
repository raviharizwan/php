<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="register.php">register</a></li>
      <li><a href="login.php">login</a></li>
      <li><a href="dashboard.php">dashboard</a></li>
    </ul>
  </div>
</nav>
<h1>user register</h1>
<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" class="form-control"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="pass" class="form-control"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="filename" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST["btn"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $imagename=$_FILES["filename"]["name"];
    $temp_location=$_FILES["filename"]["tmp_name"];
    move_uploaded_file($temp_location,"uimage/".$imagename);

    $query=mysqli_query($con,"insert into employee (name,email,password,image) values ('$name','$email','$pass','$imagename')");
    if($query>0){
echo"<script>alert('done')</script>";
header("location:login.php");
    }
    else{

    }
}
?>
</div>
</body>
</html>