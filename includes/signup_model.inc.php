<?php

declare(strict_types=1);

function signup_inputs(){
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="pwd" placeholder="Password">
  <input type="text" name="email" placeholder="E-Mail">

  if (isset($_SESSION["signup_data"]["username"]) && isset($_SESSION["errors_signup"]["username_taken"])) {

  }
}

function get_username(object $pdo, string $username)
{

  $query = "SELECT username FROM users WHERE username = :username;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":username", $username);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function get_email(object $pdo, string $email)
{

  $query = "SELECT username FROM users WHERE email = :email;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":email", $email);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function set_user(object $pdo, string $username, string $pwd, string $email)
{
  $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)";
  $stmt = $pdo->prepare($query);

  $options = [
    'cost' => 12
  ];
  $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);


  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":pwd", $hashedPwd);
  $stmt->execute();
}

