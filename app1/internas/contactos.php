<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Web Restaurante</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <header class="CabeceraPrincipal">
        <section>
            <img src="../images/App_Logo _Inspiraton _90.png" alt="">
        </section>
        <section class="contenidoCabecera">
            <div class="CC1">
                <h1>Villonaco</h1>
            </div>
            <div class="CC2">
                <div class="usuarioClass">
                    <p>Registro | Login</p>
                </div>
                <div class="busquedaClass">
                    <input type="search" placeholder="Busqueda">
                </div>
            </div>    
        </section>
    </header>
    <nav class="menuPrincipal">
        <a href="../">Inicio</a>
        <a href="">Productos</a>
        <a href="">Reserva</a>
        <a href="../prueba.php">Quienes Somos</a>
        <a href="">Contactos</a>
    </nav>
    <main>
        <h2>Contactos</h2>
        <form method="post" action="procesar.php">
            <div class="grupoInput">
                <label for="nombres">Nombre</label>
                <input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres">
            </div>
            <div class="grupoInput">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos">
            </div>
            <div class="grupoInput">
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo electronico">
            </div>
            <div class="grupoInput">
                <label for="roll">Tipo de usuario</label>
                <select name="roll" id="roll">
                    <option value="1">Administrador</option>
                    <option value="2">Visitante</option>
                </select>
            </div>
            <div class="grupoInput">
                <button type="submit" value="Procesar">Procesar</button>
            </div>
        </form>
    </main>
    
    <footer class="piePagina">
        <h6>Copyright 2020. Villonaco</h6>
    </footer>

</body>

</html>