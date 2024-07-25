<?php
require_once 'funcs.php';

$pdo = db_conn();

$servername = "localhost";
$username = 'root'; //アカウント名
$password = ''; //パスワード
$dbname = 'gs_db_kadai10'; //データベース名;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM gs_building_table";
$result = $conn->query($sql);

$users = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
} 

$conn->close();

echo json_encode($users);
?>