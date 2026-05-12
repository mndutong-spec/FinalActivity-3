<!DOCTYPE html>
<html>
<body>

<h2>GET Form</h2>
<form method="get" action="">
    Name: <input type="text" name="name_get">
    <input type="submit" value="Submit GET">
</form>

<?php
if (isset($_GET['name_get'])) {
    echo "GET Result: " . htmlspecialchars($_GET['name_get']) . "<br><br>";
}
?>

<hr>

<h2>POST Form</h2>
<form method="post" action="">
    Name: <input type="text" name="name_post">
    <input type="submit" value="Submit POST">
</form>

<?php
if (isset($_POST['name_post'])) {
    echo "POST Result: " . htmlspecialchars($_POST['name_post']);
}
?>

</body>
</html>
