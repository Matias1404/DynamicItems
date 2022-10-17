{include file="Template/header.tpl"}
<div>
    <h2>Inicia sesion</h2>
    <form action="verify" method="POST">
        <input type="text" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Contraseña" required>
        <input type="submit" value="Ingresar">
    </form>
</div>
<h2 class="error">{$error}</h2>
{include file="Template/footer.tpl"}