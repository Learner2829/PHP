<!-- 1. Write a PHP code to print following series.
*
* *
* * *
* * * *
* * * * * -->
<?php
for($i=1;$i<6;$i++)
{
    for($j=0;$j<$i;$j++)
    {
        echo "*";
    }
    echo "<br>";
}




?>


<!-- 2. Write a PHP code to redirect page to new webpage or website. -->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Enter for jump google</h1>
    <form  method="post">

        <button type="submit">Google</button>

    </form>
    <h2>Factorial Calculator</h2>

<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" required>
    <button type="submit">Calculate Factorial</button>
</form>
<h2>Multiplication Table Generator</h2>

<form method="post">
    <label for="numbers">Enter a number:</label>
    <input type="number" name="numbers" required>
    <button type="submit">Generate Table</button>
</form>
<h2>Dynamic Table Generator</h2>

<form  method="post">
    <label for="rows">Enter the number of rows:</label>
    <input type="number" name="rows" required>

    <label for="columns">Enter the number of columns:</label>
    <input type="number" name="columns" required>

    <button type="submit">Generate Table</button>
</form>

<h2>Enter Array Elements</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="element_count">Enter the number of elements:</label>
    <input type="number" name="element_count" required>
    <button type="submit">Submit</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$newPageURL = "https://www.google.com";
// header("Location: $newPageURL");
}
?>

<!-- 3. Write a PHP code to input array and display(Total No of elements must entered
from user). -->

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



<!-- 4. Write a PHP code to check the type and value of variable. -->
<?php
$a = "Ashish";
$b = 123;
echo var_dump($a);
echo "<br>";
?>
<!-- 5. Write a PHP code to demonstrate foreach in array. -->
<?php
$colors = array("Red", "Green", "Blue", "Yellow");
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>
<!-- 7. Write a PHP code to demonstrate continue and break. -->
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
<!-- 9. Write a PHP code to print multiplication table of the number entered by user.  -->
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

