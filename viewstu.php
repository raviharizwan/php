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
        <h1>student data</h1>
        <table class="table table-hover">
<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>EMAIL</td>
    <td>AGE</td>
    <td>PASSWORD</td>
</tr>
<?php
$fetch=mysqli_query($con,"select * from student");
while($row=mysqli_fetch_array($fetch))
{
?>
<tr>
    <td><?php echo $row[0] ?></td>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[4]?></td>
    <td>
        <a href="edit.php?editid=<?php echo $row[0]?>" class="btn btn-primary">edit</a>
        <a href="viewstu.php?deleteid=<?php echo $row[0]?>" class="btn btn-danger">delete</a>
   
    </td>
</tr>
<?php }?>
        </table>
    </div>
    <?php
    if(isset($_GET["deleteid"]))
    {
        $did=$_GET["deleteid"];
        $d=mysqli_query($con,"delete from student where id='$did'");
        header("location:viewstu.php");
    }
    ?>
</body>
</html>
