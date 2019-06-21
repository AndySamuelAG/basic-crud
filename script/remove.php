<?php
    require_once 'conn.php';
    $id = $_POST['id'];
    $sql = 'DELETE FROM tasks WHERE id = ?';
    $conn = conn();
    $res = $conn->prepare($sql)->execute([$id]);
?>