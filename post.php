<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $firstName = htmlspecialchars($_POST['firstName']);
  $lastName  = htmlspecialchars($_POST['lastName']);
  $idNumber  = htmlspecialchars($_POST['idNumber']);

  echo  $firstName, ' ', $lastName, ' ', $idNumber;
?>
