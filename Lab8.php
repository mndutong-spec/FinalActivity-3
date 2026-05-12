<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    
    Name: <input type="text" name="name" value="Marieden Narvaez Dutong"><br><br>

    Course:
    <select name="course">
        <option value="BSIT" selected>BSIT</option>
        <option value="BSCS">BSCS</option>
        <option value="BSBA">BSBA</option>
        <option value="BSED">BSED</option>
    </select>

    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $course = htmlspecialchars($_POST["course"]);

    echo "Name: " . $name . "<br>";
    echo "Course: " . $course;
}
?>

</body>
</html>
