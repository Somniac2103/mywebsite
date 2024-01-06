<?php

$pwdSignup = "Barry";

$options = [
  'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Barry";

if (password_verify($pwdLogin, $hashedPwd)) {
  echo "Correct";
} else {
  echo "Incorrect";
}
