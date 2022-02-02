<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea02</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
    <body>
             <section class="hero is-primary">
                <div class="hero-body">
                    <p class="title">
                          INFORMACIÓN OBTENIDA DEL FORMULARIO
                    </p>
                </div>

             </section>
    
    
            <section class="section is-medium columns">

                    <div class="column"></div>
                        <div>
                            <?php
                                $nombreSerie = $_POST['nombre'];
                                $temporada = $_POST['temporada'];
                                $descripcion = $_POST['descripcion'];

                                $crearArchivo = fopen("archivo.txt", "a+");
                                fwrite($crearArchivo,"<br><br> Información respecto a la serie:<br>Nombre de la serie: ");
                                fwrite($crearArchivo, $nombreSerie);

                                fwrite($crearArchivo, "<br>Temporadas: ");
                                fwrite($crearArchivo, $temporada);

                                fwrite($crearArchivo, "<br>Descripcion: ");
                                fwrite($crearArchivo, $descripcion);
                                fclose($crearArchivo);

                                $lectura = fopen("Archivo.txt", "r");

                                while (!feof($lectura)){
                                    $mostrar= fgets($lectura);
                                    echo nl2br($mostrar);
                                }
                                    fclose($lectura);

                            ?>
                        </div>
                    </div>

                        <div class="column"></div>

            </section>
    </body>
</html>