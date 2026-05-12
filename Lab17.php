<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

    Name: <input type="text" name="name" required><br><br>

    Email: <input type="email" name="email" required><br><br>

    Age: <input type="number" name="age" required min="1" max="120"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Gender: " . $gender;
}
?>

</body>
</html>
