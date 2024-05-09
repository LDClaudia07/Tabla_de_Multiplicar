<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Tablas de Multiplicar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container-sm" style="margin-top: 20px">
            <h2 style="font-size: 40px;">Generador de <span style="color: rgb(173, 32, 155);"> Tablas de Multiplicar</span></h2> 
            <p style="margin: 40px">Escribe la tabla que necesites generar. </p>     
        </div>
    </section>
     <!-- Título de la página -->
    
    <div class="container"  style=" background-color:hsl(293, 61%, 92%); border-radius: 10px;">
        <div class="row member d-flex align-items-start" >
            <div class="col-lg-5 mt-4">
                <div class="member d-flex align-items-start">
                    <form method="post" id="" class="row g-3 shadow p-3 mb-5 bg-body-tertiary rounded"  style=" margin: 30px">
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="numero1" placeholder="número 1" required>
                        </div>
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="numero2" placeholder="número 2" required>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-warning" id="generar-tablas" style=" margin-bottom: 10px">Generar tablas</button> 
                        </div>     
                    </form>
                </div>
            </div>
            <div class="col-lg-4 mt-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded" >
                <div class="member d-flex align-items-start" style=" margin-left:15px;">
                    <table id="tabla1"  style=" margin: 30px;"></table>
                    <table id="tabla2" style=" margin: 30px;"></table>
                </div>   
            </div>
        </div>
    </div>

    
    



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script> <!-- Archivo JavaScript para manejar eventos -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</body>
</html>

