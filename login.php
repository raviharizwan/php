<?php
include("connection.php");
session_start();
if(isset($_SESSION["username"])!=null)
{
    header("location:dashboard.php");

}
else{


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
<h1>user login</h1>
<form action="" method="post">
    <table>
        <tr>
            <td>email</td>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="pass" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="submit" name="log" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST["log"])){
    $email=$_POST["email"];
    $pass=$_POST["pass"];

    $query=mysqli_query($con,"select * from employee where email='$email' AND password='$pass'");
    $check=mysqli_num_rows($query);
    $a=mysqli_fetch_array($query);
    if($check>0){
        $_SESSION["username"]=$a[1];
        $_SESSION["image"]=$a[4];
header("location:dashboard.php");
    }
    else{
echo"login failed";
    }
}
?>
</div>
</body>
</html>
<?php } ?>