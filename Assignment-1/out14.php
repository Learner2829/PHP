<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    echo'<table border="1">
    <tr>
        <td>Username:</td>
        <td>'.$_POST['username'].'</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>'.$_POST['email'].'</td>
    </tr>
    <tr>
        <td>Password:</td>
        <td>'.$_POST['password'].'</td>
    </tr>
</table>';
}

?>