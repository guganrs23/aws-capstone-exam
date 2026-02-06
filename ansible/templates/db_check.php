<?php
$conn = new mysqli("RDS_ENDPOINT", "admin", "Admin12345!", "streamline");
if ($conn->connect_error) {
  die("Connection Failed");
}
echo "Database Connected Successfully";
?>
