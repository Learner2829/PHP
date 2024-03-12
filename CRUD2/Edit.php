<?php
require_once "connect.php";
$EmailU=$_REQUEST["Email"];
$query="SELECT * FROM `user` WHERE Email='$EmailU'";
// echo $query;
$resu=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($resu);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneh crud operation</title>
</head>
<body>
    <div style="text-align: center;">
        <form action="" method="post">
            Username : <input type="text" name="Uname" value='.$data["Username"].'> <br> <br>
            Email : <input type="email" name="Email" value='.$data["Email"].' > <br> <br>
            Password : <input type="text" name="Password" value='.$data["Password"].'><br> <br>
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
    <div>
       <a href="show.php">Show data</a>
    </div>
</body>
</html>';
require_once "connect.php";
if(isset($_POST["submit"]))
{
    $User=$_POST["Uname"];
    $Email=$_POST["Email"];
    $pass=$_POST["Password"];

    $query="UPDATE `user` SET `Username`='$User',`Email`='$Email',`Password`='$pass' WHERE Email='$Email'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "Data Updated";
    }
    else
    {
        echo "Data not Upadate";
    }
    // echo $User."<br>";
    // echo $Email."<br>";
    // echo $pass."<br>";

}
// print_r($data);
if(!$resu)
{
    echo "Query not run";
}


?>