<!DOCTYPE html>
<html>
<body>

<h2>Simple Form</h2>

<form method="post" action="process.php">

    Name: <input type="text" name="name"><br><br>

    Email: <input type="text" name="email"><br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    if (empty($name) || empty($email)) {
        echo "All fields are required.";
    } else {
        echo "<h2>Submitted Data</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }
}

?>
