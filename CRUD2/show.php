<?php
require_once "connect.php";
$query = "select * from User";
$resu=mysqli_query($conn,$query);

// print_r($data);
echo '
<table border="1">
    <tr>
    <td>
        Username
    </td>
    <td>
        Email
    </td>

    <td>
        Password
    </td>
     <td>
        Edit Log
    </td>

    <td>
        Delete Log
    </td>
    </tr>';
    while($data=mysqli_fetch_assoc($resu))
    {
        $emailu=$data["Email"];
    echo'<tr>
        <td> '.$data["Username"].'</td>
        <td>'.$data["Email"].'</td>
        <td>'.$data["Password"].'</td>
        <td><a href="Edit.php?Email='.$emailu.'">Edit</a></td>
        <td><a href="Delete.php?Email='.$emailu.'">Delete</a></td>
    </tr>';
    }
echo '</table>';

echo ' <a href="index.php">Click for Insert Data</a>'





?>