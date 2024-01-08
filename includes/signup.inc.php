<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];

  try {

    require_once 'dbh.inc.php';
    #model first then view then contr for object programming purposes
    require_once 'signup_model.inc.php';
    require_once 'signup_contr.inc.php';

    //ERROR HANDLERS
    if (is_input_empty($username, $pwd, $email)) {
    }
    if (is_email_invalid($email)) {
    }
    if (is_username_taken($pdo, $username)) {
    }
    if (is_email_registered($pdo, $email)) {
    }
  } catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
  }
} else {
  header("Location: ../index.php");
  die();
}
