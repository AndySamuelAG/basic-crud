<?php
    require_once 'script/fill.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
</head>
<body>
    <div class="cnt">
        <div class="title">
            <h1>PHP CRUD</h1>
        </div>
        <div class="description">
            <h3>CRUD made with ❤ using PHP</h3>
        </div>
    </div>
    <div class="table">
        <table>
            <tbody>
                <tr class="table-title">
                    <th data-id="table-title_1">Título</th>
                    <th data-id="table-title_2">Otro Título</th>
                    <th data-id="table-title_3">Acción</th>
                </tr>
                
                <?php
                    fill();
                ?>

                <tr class="column-add">
                    <td class="table_add_1 editing" contenteditable="true">-</td>
                    <td class="table_add_2 editing" contenteditable="true">-</td>
                    <td class="table_add_3"><i class="fa fa-plus add"></i></td>
                </tr>
            </tbody>
        </table>
    </div>

    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>