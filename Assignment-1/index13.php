<!-- 13. Make a simple
webpage which shows the use of include, require. -->
name:ansari yusuf 
rollno :61
cource:msc-cs-4
subject :php
---------------------------------------------
Q1
1. Write a PHP code to print following series.
*
* *
* * *
* * * *
* * * * *


<?php

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

?>
<!-- output:
*
* *
* * *
* * * *
* * * * * -->
-----------------------------------------------------------
Q2
2. Write a PHP code to redirect page to new webpage or website.
<?php
// Redirect to a new webpage
$newPage = "https://www.w3schools.com";
header("Location: $newPage");
exit();
?>
----------------------------------------------------------
output:

opens w3schools

--------------------------------------------------
Q3. Write a PHP code to input array and display(Total No of elements must entered
from user).

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Display</title>
</head>
<body>

<h2>Enter Array Elements</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="element_count">Enter the number of elements:</label>
    <input type="number" name="element_count" required>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $element_count = $_POST["element_count"];

    // Display the form to input array elements
    echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
    echo '<h2>Enter Array Elements</h2>';
    
    for ($i = 0; $i < $element_count; $i++) {
        echo '<label for="element' . $i . '">Enter element ' . ($i + 1) . ':</label>';
        echo '<input type="text" name="elements[]" required>';
        echo '<br>';
    }
    
    echo '<button type="submit">Submit</button>';
    echo '</form>';

    // Display the entered array
    if (isset($_POST["elements"])) {
        echo '<h2>Entered Array</h2>';
        echo '<pre>';
        print_r($_POST["elements"]);
        echo '</pre>';
    }
}
?>

</body>
</html>


output
------------------------------------------------------
Entered Array
Array
(
    [0] => 3
    [1] => 4
    [2] => 5
)
-----------------------------------------------------------------------------------
Q4 . Write a PHP code to check the type and value of variable.


<?php
$variable = "Hello, PHP!"; // Replace this with the variable you want to check

// Check the type of the variable
$type = gettype($variable);

// Display the type and value
echo "Type: $type<br>";
echo "Value: ";
var_dump($variable);
?>

------------------------------------------------------------------------
output:
Type: string
Value: string(11) "Hello, PHP!
---------------------------------------------
Q5. Write a PHP code to demonstrate foreach in array.

<?php
// Sample array
$colors = array("Red", "Green", "Blue", "Yellow");

// Using foreach to iterate over array elements
echo "Using foreach loop to display array elements:<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>

-------------------------------------------------------
output

Using foreach loop to display array elements:
Red
Green
Blue
Yellow
--------------------------------------------------
q6 Write a PHP code to demonstrate switch statement.


<?php

// Define a variable
$day = "Monday";

// Using a switch statement to perform different actions based on the value of $day
switch ($day) {
    case "Monday":
        echo "It's Monday. Time to start the week!";
        break;
    case "Tuesday":
        echo "It's Tuesday. Keep pushing forward!";
        break;
    case "Wednesday":
        echo "It's Wednesday. Halfway through the week!";
        break;
    case "Thursday":
        echo "It's Thursday. Almost there!";
        break;
    case "Friday":
        echo "It's Friday. Time to celebrate!";
        break;
    case "Saturday":
        echo "It's Saturday. Enjoy the weekend!";
        break;
    case "Sunday":
        echo "It's Sunday. Relax and recharge!";
        break;
    default:
        echo "Invalid day!";
}

?>

-------------------------------------------------------------

Q 7. Write a PHP code to demonstrate continue and break. 
<?php
$dayOfWeek = "Wednesday";
switch ($dayOfWeek) {
    case "Monday":
        echo "It's the beginning of the week!";
        break;
    case "Wednesday":
        echo "It's the middle of the week!";
        break;
    case "Friday":
        echo "It's almost the weekend!";
        break;
    default:
        echo "It's just another day.";
}
?>
---------------------
output
It's the middle of the week!-----

------------------------------
<!-- 8. Write a PHP code to find the factorial of the number entered by user -->


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userNumber = $_POST['number'];
    if (is_numeric($userNumber) && $userNumber >= 0 && $userNumber == (int)$userNumber) {
        $factorial = 1;
        for ($i = 1; $i <= $userNumber; $i++) {
            $factorial *= $i;
        }
        echo "<p>The factorial of $userNumber is: $factorial</p>";
    } else {
 
        echo "<p>Please enter a non-negative integer.</p>";
    }
}
?>
----------------------------------------
output
---------------------------------
q 9. Write a PHP code to print multiplication table of the number entered by user.  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user-entered number
    $userNumber = $_POST['numbers'];

    // Validate that the input is a positive integer
    if (is_numeric($userNumber) && $userNumber > 0 && $userNumber == (int)$userNumber) {
        // Display the multiplication table
        echo "<h3>Multiplication Table for $userNumber</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$userNumber x $i</td><td>=</td><td>" . ($userNumber * $i) . "</td></tr>";
        }
        echo "</table>";
    } else {
        // Display an error message for invalid input
        echo "<p>Please enter a positive integer.</p>";
    }
}
?>
-----------------------------------------------------
output
-----------------------------------------------------
<!-- 10. Write a
PHP code to take input from user for no of row and column and generate
dynamic table. -->


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $rows = $_POST['rows'];
    $columns = $_POST['columns'];


    if (is_numeric($rows) && is_numeric($columns) && $rows > 0 && $columns > 0 &&
        $rows == (int)$rows && $columns == (int)$columns) {

      
        echo "<h3>Dynamic Table</h3>";
        echo "<table border='1'>";

        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $columns; $j++) {
                echo "<td>Row $i, Column $j</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
     
        echo "<p>Please enter positive integers for rows and columns.</p>";
    }
}
?>
----------------------------------------------------
output
-----------------------------------------------
q11 Write a PHP code to define use of $_POST, $_GET and $_REQUEST.

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

------------------------------------------------------------
q12 Write a code to make user registration form and validate that form.


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

-------------------------------------------------------------
13Make a simple webpage which shows the use of include, require.
-----------------------------------------------------------------


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include vs Require</title>
</head>
<body>

<h2>Using Include</h2>
<div>
    <?php include 'content.php'; ?>
</div>

<h2>Using Require</h2>
<div>
    <?php require 'content.php'; ?>
</div>

</body>
</html>

content.php file
<?php<p>This is the included content.</p>?>

----------------------------------------------------------
q14. Write a PHP code to make user registration form and display the given detail on
another page in Table format.
--------------------------------------------------------------

q15
15. Write a PHP code to demonstrate regular expression functions.
<?php

// Sample text
$text = "The quick brown fox jumps over the lazy dog.";

// Using preg_match() to find a pattern
$pattern = "/fox/";
if (preg_match($pattern, $text)) {
    echo "Pattern found using preg_match().<br>";
} else {
    echo "Pattern not found using preg_match().<br>";
}

// Using preg_match_all() to find all occurrences of a pattern
$pattern = "/the/i"; // Case-insensitive search for occurrences of "the"
if (preg_match_all($pattern, $text, $matches)) {
    echo "Total occurrences of 'the': " . count($matches[0]) . "<br>";
} else {
    echo "No occurrences of 'the' found using preg_match_all().<br>";
}

// Using preg_replace() to replace a pattern
$pattern = "/lazy/";
$replacement = "active";
$newText = preg_replace($pattern, $replacement, $text);
echo "Text after replacement: $newText<br>";

// Using preg_split() to split a string based on a pattern
$pattern = "/\s+/"; // Splitting by one or more whitespace characters
$words = preg_split($pattern, $text);
echo "Words in the text:<br>";
foreach ($words as $word) {
    echo $word . "<br>";
}

?>


