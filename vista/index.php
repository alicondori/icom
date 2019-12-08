<?php include("includes/header.php") ?>
<section>
    <div class="contenedor">
        <div class="main">
            <div class="contenedor_detalle">
                <div class="login">
                    <form action="../controlador/" method="POST" class="formulario">
                        <p>Iniciar Sesion</p>
                        <input type="emil" name="email" placeholder="correo" required>
                        <input type="password" name="password" placeholder="contraseña" required>
                        <input type="submit" class="btn" name="enviar" value="ingresar">
                    </form>
                    <form action="../controlador/" method="POST" class="formulario">
                        <p>Registrarce</p>
                        <input type="text" name="nombre" placeholder="nombre" required>
                        <input type="text" name="apellido" placeholder="apellidos" required>
    
                        <div class="sexo">
                            <input type="radio" name="sexo" value="masculino" id="h" required>
                            <label for="h">hombre</label>
                            <input type="radio" name="sexo" value="femenino" id="m" required>
                            <label for="m">mujer</label>
                        </div>
    
                        <input type="emil" name="email" placeholder="correo" required>
                        <input type="password" name="password" placeholder="contraseña" required>
                        <input type="submit" class="btn" name="enviar" value="registrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("includes/footer.php") ?>