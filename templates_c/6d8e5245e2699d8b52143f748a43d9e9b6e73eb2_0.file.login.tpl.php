<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:09:49
  from 'C:\xampp\htdocs\proyectos\tpe\Template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d703daeb682_50154332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d8e5245e2699d8b52143f748a43d9e9b6e73eb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\Template\\login.tpl',
      1 => 1666019372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634d703daeb682_50154332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h2>Inicia sesion</h2>
    <form action="verify" method="POST">
        <input type="text" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Contraseña" required>
        <input type="submit" value="Ingresar">
    </form>
</div>
<h2 class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>
<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
