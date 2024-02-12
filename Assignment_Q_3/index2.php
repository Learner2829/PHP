<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['n'])) {
        $len = (int)$_POST['n'];
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index3.php" method="post">';
        for ($i = 0; $i < $len; $i++) {
            echo '<input type="number" name="arr[]"><br><br>';
        }
        echo '<button type="submit" name="s">Submit</button>
    </form>
</body>
</html>';
    }
}
?>
