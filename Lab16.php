<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

    Name: <input type="text" name="name"><br><br>

    Age: <input type="number" name="age"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $age = $_POST["age"];

    echo "Name: " . $name . "<br>";

    if (empty($age)) {
        echo "Age is required";
    } elseif (!is_numeric($age)) {
        echo "Age must be a number";
    } elseif ($age < 1 || $age > 120) {
        echo "Age must be between 1 and 120";
    } else {
        echo "Age: " . $age;
    }
}
?>

</body>
</html>
