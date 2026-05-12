<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name" value="Marieden Narvaez Dutong"><br><br>
    
    Email: <input type="email" name="email" value="mndutong@paterostechnologicalcollege.edu.ph"><br><br>
    
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
    echo "Name: " . $_POST['name'] . "<br>";
    echo "Email: " . $_POST['email'];
}
?>

</body>
</html>
