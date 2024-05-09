$(document).ready(function() {
    $('#generar-tablas').click(function(){

        var numero1 = $("#numero1").val();
        var numero2 = $("#numero2").val();

        $.ajax({
            type: "POST",
            url: "Controller.php",
            data:{numero1: numero1, numero2: numero2},
            success: function(data){
                var result = JSON.parse(data);
                var table1 = result.table1;
                var table2 = result.table2;

                //Estructura HTML para la 1° tabla.

                var tableHTML1 = "<tr><th>Tabla 1</th></tr>"
                for (var i = 0; i < table1.length; i++){
                    tableHTML1 += "<tr><td>" + (i + 1) + " X " + numero1 +" = </td><td>" + table1[i] + "</td></tr>";
                }
                $("#tabla1").html(tableHTML1);

                //Estructura HTML tabla 2
                var tableHTML2 = "<tr><th>Tabla 2</th></tr>"
                for (var i = 0; i < table1.length; i++){
                    tableHTML2 += "<tr><td>" + (i + 1) + " X " + numero2 +" = </td><td>" + table2[i] + "</td></tr>";
                }
                $("#tabla2").html(tableHTML2);
            }
        })
    })  
});