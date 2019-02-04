<?php
if(isset($_POST['submitted'])){
  include('connect_mysql.php');
  $zeli = $_POST['zelenina'];

  $statement = $db->prepare("insert into vegetable(name) values (?)");
  $statement->bind_param("s", $zeli);
  $statement->execute();
}

?>