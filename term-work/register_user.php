<!DOCTYPE html>
<?php
include('connect_mysql.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="insert_user.php">
    <input type="hidden" name="submitted" value="true">
    <fieldset>
        <label>username: <input type="text" name="name"></label>
        <label>password: <input type="password" name="pswd"></label>
    </fieldset>
    <br/>
    <input type="submit" value="Register">
</form>

</body>
</html>