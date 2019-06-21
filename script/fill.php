<?php
    require_once 'conn.php';
    function fill(){
        $conn = conn();
        $sql = 'SELECT * FROM tasks';
        $items = $conn->query($sql);
        if($items){
            foreach ($items as $row) {
               echo 
                '<tr data-id='.$row['id'].' data-color="'.$row['color'].'" class="wrap">
                <td class="item_1">'. $row[1] .'</td>
                <td class="item_2">'. $row[2] .'</td>
                    <td class="item_3">
                        <i class="fa fa-edit edit"></i>
                        <i class="fa fa-trash-alt delete"></i>
                        <i class="fa fa-palette color"></i>
                    </td>
                </tr>';
            }   
        }
    }
?>