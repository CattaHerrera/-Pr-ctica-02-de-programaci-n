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
                              FORMULARIO - SERIE DE NETFLIX
                          </p>
                     </div>

                </section>
    
                <section>

                    <div>
            
                        <form action="infoGuardada.php" method="post">

                            <div class="subtitle">
                                <label>Nombre de la serie</label>
                                <input class="input is-primary" type="text" name="nombre">
                            </div>

                            <div class="subtitle">
                                <label>Temporadas</label>
                                <input class="input is-primary" type="number" name="temporada">
                             </div>

                             <div class="subtitle">
                                <label>Breve descripcion:</label>
                                <input class="input is-primary" type="text" name="descripcion">
                             </div>

                            <div>
                             <input type="submit" class="button is-primary" value="Enviar">
                            </div>
                        </form>

                    </div>


             </section>
</body>
</html>