<?php
if(isset($_POST['submitted'])){
  include('connect_mysql.php');
  $username = $_POST['name'];
  $pswd = $_POST['pswd'];

  $statement = $db->prepare("insert into users(nick,password) values (?,?)");
  $statement->bind_param("ss", $username, $pswd);
  $statement->execute();
}

?>