<!DOCTYPE html>
<html>
<body>

<h2>Student Registration Form</h2>

<form method="post" action="">

    Name: <input type="text" name="name"><br><br>

    Email: <input type="text" name="email"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:
    <select name="course">
        <option value="">--Select Course--</option>
        <option value="BSIT">BSIT</option>
        <option value="BSCS">BSCS</option>
        <option value="BSBA">BSBA</option>
        <option value="BSED">BSED</option>
    </select>
    <br><br>

    Hobbies:<br>
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming<br>
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
    <input type="checkbox" name="hobbies[]" value="Music"> Music<br>
    <input type="checkbox" name="hobbies[]" value="Dancing"> Dancing<br>
    <input type="checkbox" name="hobbies[]" value="Cooking"> Cooking<br>
    <br>

    Message:<br>
    <textarea name="message" rows="5" cols="30"></textarea>
    <br><br>

    <input type="submit" value="Register">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    // Validation
    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    }
    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($_POST["gender"])) {
        $errors[] = "Gender is required";
    }
    if (empty($_POST["course"])) {
        $errors[] = "Course is required";
    }
    if (empty($_POST["message"])) {
        $errors[] = "Message is required";
    }

    // Show errors
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {

        // Sanitization
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $course = htmlspecialchars($_POST["course"]);
        $message = htmlspecialchars($_POST["message"]);

        $hobbies = !empty($_POST["hobbies"]) ? $_POST["hobbies"] : [];

        echo "<br><h3>Registration Details</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Course: " . $course . "<br>";

        echo "Hobbies: ";
        if (!empty($hobbies)) {
            foreach ($hobbies as $hobby) {
                echo htmlspecialchars($hobby) . " ";
            }
        } else {
            echo "None";
        }

        echo "<br>Message: " . nl2br($message);
    }
}
?>

</body>
</html>
