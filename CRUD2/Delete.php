<?php
require_once "connect.php";
$Emailu=$_REQUEST["Email"];
$query="Delete from user where Email= '$Emailu' ";
$result=mysqli_query($conn,$query);
if($result)
{
    echo "Your data is Deleted"."<br>";
    echo '<a href="show.php">Show data</a>';
}
else
{
    echo "We have some error";
}


?>