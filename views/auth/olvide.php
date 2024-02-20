<div class="contenedor olvide">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu Acesso UpTask</p>

        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form class="formulario" method="POST" action="/olvide">
            
            <div class="campo">
                <label for="nombre">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email">
            </div>

            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>
        
        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Inicia Sesion</a>
            <a href="/crear">¿Aún no tienes una cuenta? Obtiene una</a>
        </div>
    </div>
</div>