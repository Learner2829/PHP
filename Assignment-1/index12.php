<!-- 12. Write a
code to make user registration form and validate that form -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body>

<h2>User Registration Form</h2>

<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" required>

    <button type="submit" name="submit">Register</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic form validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "<p>Please fill in all the fields.</p>";
    } elseif ($password !== $confirm_password) {
        echo "<p>Passwords do not match. Please try again.</p>";
    } else {
        // Perform further validation and database operations (not included in this example)
        // At this point, you may want to hash the password before storing it in the database

        // Display success message
        echo "<p>Registration successful! Welcome, $username!</p>";
    }
}
?>

</body>
</html>
