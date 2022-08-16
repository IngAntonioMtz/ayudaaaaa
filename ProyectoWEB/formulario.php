<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bolsa de trabajo</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logos.png">

   
    
</head>
<body>


    <form name="contact" method="POST" data-netlify-recaptcha="true" data-netlify="true">
        <div class="form">
            <h1>Talabarteria La Dueña <br> Bolsa de trabajo</h1>
    
            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="" required><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="grupo">
                <input type="number" name="edad" id="" required><span class="barra"></span>
                <label>Edad</label>
            </div>

            <div class="grupo">
                <input type="number" name="Celular" id="" required><span class="barra"></span>
                <label>Numero de celular</label>
            </div>

            <div class="grupo">
                <input type="text" name="nivel de estudios" id="" required><span class="barra"></span>
                <label>Nivel de estudios</label>
            </div>

           

            <div class="grupo">
                <textarea name="mensaje" id="" rows="3" required></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>

            <div id="capcha" data-netlify-recaptcha="true"></div>

            <button type="submit">ENVIAR</button>
            <a href="index.php" class="hvr-skew-backward">INICIO</a>
        </div>
    </form>
</body>
</html>