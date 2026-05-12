<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

    Name:
    <input type="text" name="name"
        value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
    <br><br>

    Email:
    <input type="text" name="email"
        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<br><h3>Submitted Data</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>
