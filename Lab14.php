<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

    Name: <input type="text" name="name"><br><br>

    Hobbies:<br>
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming<br>
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
    <input type="checkbox" name="hobbies[]" value="Music"> Music<br>
    <input type="checkbox" name="hobbies[]" value="Dancing"> Dancing<br>
    <input type="checkbox" name="hobbies[]" value="Cooking"> Cooking<br>
    <br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);

    echo "Name: " . $name . "<br>";

    if (!empty($_POST["hobbies"])) {

        echo "Hobbies: ";

        foreach ($_POST["hobbies"] as $hobby) {
            echo htmlspecialchars($hobby) . " ";
        }

    } else {
        echo "No hobbies selected.";
    }
}
?>

</body>
</html>
