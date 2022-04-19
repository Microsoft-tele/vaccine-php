<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Lwj20020302";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}