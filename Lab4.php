<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name" value="Marieden Narvaez Dutong"><br><br>

    Email: <input type="email" name="email" value="mndutong@paterostechnologicalcollege.edu.ph"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["name"])) {
        echo "Name is required<br>";
    } else {
        echo "Name: " . $_POST["name"] . "<br>";
    }

    if(empty($_POST["email"])) {
        echo "Email is required";
    } else {
        echo "Email: " . $_POST["email"];
    }
}
?>

</body>
</html>
