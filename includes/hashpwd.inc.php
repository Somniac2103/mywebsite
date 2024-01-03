<?php

$sensitiveData = "Barry";
$salt = bin2hex(random_bytes(16));
$pepper = "ASecretPepperString";

echo "<br>" . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;


//////
$sensitiveData = "Barry";

$storedSalt = $salt;
$storeHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

if ($storeHash  === $verificationHash) {
  echo "<br> The data is the same";
} else {
  echo "<br> The data are not the same!";
}
