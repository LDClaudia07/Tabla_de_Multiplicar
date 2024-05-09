<?php 
include 'Model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2'] );

    $table1 = TabladeMultiplicacionModel::getTabla($numero1);
    $table2 = TabladeMultiplicacionModel::getTabla($numero2);

    echo json_encode(['table1' => $table1, 'table2' => $table2]);


}


?>