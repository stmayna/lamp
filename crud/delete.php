<?php
$pdo = new PDO('mysql:host=localhost;dbname=ship_ports', 'root', 'password');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = $_GET['id'];
$sql = $pdo->prepare("UPDATE invoices SET deleted = 1 WHERE id = ?");
$sql->execute(array($id));
header("Location:index.php");
