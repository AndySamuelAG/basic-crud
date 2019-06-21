<?php
    require_once 'conn.php';
    $conn = conn();

    $id = $_POST['id'];
    $color = $_POST['color'];

    $sql = 'UPDATE tasks SET color = ? WHERE id = ?';
    $res = $conn->prepare($sql)->execute([$color, $id]);

?>