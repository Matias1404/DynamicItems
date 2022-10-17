<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:45:57
  from 'C:\xampp\htdocs\proyectos\tpe\Template\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d78b5e2b1b5_05651906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b07804e99b441e685fc6375e28f4440126b74ddf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\Template\\error.tpl',
      1 => 1666021461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634d78b5e2b1b5_05651906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>
<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
