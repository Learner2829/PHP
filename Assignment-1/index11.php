<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing Example</title>
</head>
<body>

<h2>Form Processing Example</h2>

<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit" name="submit_post">Submit via POST</button>
    <button type="submit" name="submit_get">Submit via GET</button>
</form>

<?php
// Check if form is submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Using $_POST to retrieve form data submitted via POST
    $username_post = $_POST['username'];
    $password_post = $_POST['password'];

    echo "<h3>Data submitted via POST:</h3>";
    echo "Username: $username_post<br>";
    echo "Password: $password_post<br>";
}

// Check if form is submitted using GET method
if (isset($_GET['submit_get'])) {
    // Using $_GET to retrieve form data submitted via GET
    $username_get = $_GET['username'];
    $password_get = $_GET['password'];

    echo "<h3>Data submitted via GET:</h3>";
    echo "Username: $username_get<br>";
    echo "Password: $password_get<br>";
}

// Using $_REQUEST to retrieve form data submitted via both POST and GET
if (isset($_REQUEST['submit_post']) || isset($_REQUEST['submit_get'])) {
    $username_request = $_REQUEST['username'];
    $password_request = $_REQUEST['password'];

    echo "<h3>Data submitted via REQUEST (both POST and GET):</h3>";
    echo "Username: $username_request<br>";
    echo "Password: $password_request<br>";
}
?>

</body>
</html>
