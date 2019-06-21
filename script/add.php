<?php
    require_once 'conn.php';
    $conn = conn();

    $item_1 = $_POST['item_1'];
    $item_2 = $_POST['item_2'];

    $sql = 'INSERT INTO tasks (valor_1, valor_2) VALUES (?, ?)';
    $res = $conn->prepare($sql)->execute([$item_1, $item_2]);
    $id = $conn->lastInsertId();
    echo '
    <tr data-id='.$id.' class="wrap">
        <td class="item_1">' . $item_1 . '</td>
        <td class="item_2">' . $item_2 . '</td>
        <td class="item_3"><i class="fa fa-edit edit"></i><i class="fa fa-trash-alt delete"></i><i class="fa fa-palette color"></i></td>
    </tr>
    <tr class="column-add">
        <td class="table_add_1 editing" contenteditable="true">-</td>
        <td class="table_add_2 editing" contenteditable="true">-</td>
        <td class="table_add_3"><i class="fa fa-plus add"></i></td>
    </tr>'
?>