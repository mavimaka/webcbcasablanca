<h1 class="nombre-pagina">Olvidé mi Contraseña</h1>
<p class="descripcion-pagina">Restablezca su contraseña, escribiendo su E-mail a continuación</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form class="formulario" action="/olvide" method="POST">

    <div class="campo">
        <label for="email">E-mail</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu E-mail"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones" />
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión aquí</a>
    <a href="/crear-cuenta">¿Aún no eres cliente? Crea tu cuenta aquí</a>
</div>