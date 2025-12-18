<?php
$host = 'localhost';
$user = 'root';
$password = '391307';
$database = 'iniziostart';

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){
    die('Připojení selhalo:' . $conn->connect_error);
}
echo('Připojení k serveru je OK/200');
$conn->close();
?>

