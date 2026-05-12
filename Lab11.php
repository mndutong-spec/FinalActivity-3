<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>

    <input type="submit" value="Submit">
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
