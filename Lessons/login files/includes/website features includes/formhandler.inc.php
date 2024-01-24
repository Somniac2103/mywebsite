<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];

  try{
    require_once "dbhc.inc.php";

    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, $email);";

    $stmt = $pdo->prepare($query);

    $options = [
      'cost' => 12
    ];
    
    $hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":email", $email);

    $stmt-> execute([$username, $pwd, $email]);

    $pdo = null;
    $stmt = null;

    header("Location: ../index.php");
    die();

  } catch (PDOException $e){
    die("Query failed: " . $e->getMessage());
  }
}
else{
  header("Location: ../index.php")
}