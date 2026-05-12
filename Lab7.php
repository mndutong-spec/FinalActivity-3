<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    
    Name: <input type="text" name="name" value="Marieden Narvaez Dutong"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female" checked> Female
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $gender = htmlspecialchars($_POST["gender"]);

    echo "Name: " . $name . "<br>";
    echo "Gender: " . $gender;
}
?>

</body>
</html>
