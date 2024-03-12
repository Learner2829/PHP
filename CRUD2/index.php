<!-- E:\xampp\htdocs\Session\index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneh crud operation</title>
</head>
<body>
    <div style="text-align: center;">
        <form action="" method="post">
            Username : <input type="text" name="Uname"> <br> <br>
            Email : <input type="email" name="Email" > <br> <br>
            Password : <input type="password" name="Password" ><br> <br>
            <input type="submit" name="submit">
        </form>
    </div>
    <div>
       <a href="show.php">Show data</a>
    </div>
</body>
</html>
<?php
require_once "connect.php";
if(isset($_POST["submit"]))
{
    $User=$_POST["Uname"];
    $Email=$_POST["Email"];
    $pass=$_POST["Password"];

    $query="INSERT INTO `user` (`Username`, `Email`, `Password`) VALUES ('$User', '$Email', '$pass')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "Data inserted";
        header("Location:temp.php");
    }
    else
    {
        echo "Data not inserted";
    }
    // echo $User."<br>";
    // echo $Email."<br>";
    // echo $pass."<br>";

}





?>
