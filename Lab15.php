<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

    Name: <input type="text" name="name"><br><br>

    Email: <input type="text" name="email"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>
