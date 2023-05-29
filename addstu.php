<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>create student</h1>
        <form action="" method="post">
            <table class="table table-hover">
                <tr>
                    <td>name</td>
                    <td><input type="text" name="name" required class="form-control"></td>
                </tr>
                <tr>
                    <td>age</td>
                    <td><input type="text" name="age" required class="form-control"></td>
                </tr>
                 <tr>
                    <td>email</td>
                    <td><input type="text" name="email" required class="form-control"></td>
                </tr>
                 <tr>
                    <td>password</td>
                    <td><input type="password" name="password" required class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btn"></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST["btn"]))
        {
            $name=$_POST["name"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $age=$_POST["age"];

            $query=mysqli_query($con,"insert into student (name,email,age,password) values('$name','$email','$age','$password')");
            if($query>0)
            {
                echo"data save";
            }
            else
            {
                echo"not save";
            }

        }
        
        ?>
    </div>
</body>
</html>