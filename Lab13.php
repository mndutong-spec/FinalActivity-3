<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

    Name: <input type="text" name="name"><br><br>

    Password: <input type="password" name="password"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $password = $_POST["password"]; // do NOT display directly

    echo "Name: " . $name . "<br>";

    // Do not show password, only confirm it was received
    if (!empty($password)) {
        echo "Password received securely.";
    } else {
        echo "Password is required.";
    }
}
?>

</body>
</html>
