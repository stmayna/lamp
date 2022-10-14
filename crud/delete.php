<?php
        $pdo = new PDO('mysql:host=localhost;dbname=ship_ports', 'root', 'password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id = $_GET['id'];
        $sql = $pdo->prepare("DELETE FROM invoices WHERE id = ?");
        $sql->execute(array($id));
        header("Location:index.php");
?>