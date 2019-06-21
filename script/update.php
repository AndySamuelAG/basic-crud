<?php
    require_once 'conn.php';
    $conn = conn();
    
    $id = $_POST['id'];
    $item_1 = $_POST['item_1'];
    $item_2 = $_POST['item_2'];
    $sql = 'UPDATE tasks SET valor_1 = ?, valor_2 = ? WHERE id = ?';
    $res = $conn->prepare($sql)->execute([$item_1, $item_2, $id]);
?>