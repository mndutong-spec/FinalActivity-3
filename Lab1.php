<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
    Name: <input type="text" name="name" value="Marieden">
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_GET['name'])) {
    echo "Hello, " . $_GET['name'];
}
?>

</body>
</html>
