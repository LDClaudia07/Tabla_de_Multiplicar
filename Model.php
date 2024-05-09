<?php
class TabladeMultiplicacionModel {
    public static function getTabla($numero){
        $tabla = [];
        for($i = 1; $i<=10; $i++){
            $tabla[]= $i * $numero;
        }
        return $tabla;
    }

} 
?>