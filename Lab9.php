<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

    Name: <input type="text" name="name" value="Marieden Narvaez Dutong"><br><br>

    Message:<br>
    <textarea name="message" rows="5" cols="30">Hi, Hello</textarea>
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "Name: " . $name . "<br>";
    echo "Message: " . nl2br($message);
}
?>

</body>
</html>
