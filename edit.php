<?php
include("connection.php");
if(isset($_GET["editid"])){
    $f=$_GET["editid"];
    $select=mysqli_query($con,"select * from student where id='$f'");
    $r=mysqli_fetch_array($select);
}
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
        <h1>create employee</h1>
<a href="viewstu.php" class="btn btn-info">employee data</a>
        <form action="" method="post">
            <table class="table table-hover">
                <tr>
                    <td>name</td>
                    <td><input type="text" name="name" required class="form-control" value="<?php echo $r[1] ?>"></td>
                </tr>
                 <tr>
                    <td>email</td>
                    <td><input type="text" name="email" required class="form-control" value="<?php echo $r[2] ?>"></td>
                </tr>
                <tr>
                    <td>age</td>
                    <td><input type="text" name="age" required class="form-control" value="<?php echo $r[3] ?>"></td>
                </tr>
                 <tr>
                    <td>password</td>
                    <td><input type="password" name="password" required class="form-control" value="<?php echo $r[4] ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btn" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST["btn"]))
        {
            $f=$_GET["editid"];
            $name=$_POST["name"];
            $email=$_POST["email"];
            $age=$_POST["age"];
            $password=$_POST["password"];

            $update=mysqli_query($con,"update student set name='$name',email='$email',age='$age',password='$password' where id='$f'");
            if($update>0)
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