<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Email: <input type="email" name="email" value="mndutong@paterostechnologicalcollege.edu.ph"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email: " . htmlspecialchars($email);
    } else {
        echo "Invalid email";
    }
}
?>

</body>
</html>
