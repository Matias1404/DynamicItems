<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:17:52
  from 'C:\xampp\htdocs\proyectos\tpe\Template\clubes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d72201e01a6_57108204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981854fa20925270905625efbf9a65fd17df7ce2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\Template\\clubes.tpl',
      1 => 1666019870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634d72201e01a6_57108204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="clubes">
    <thead>
        <tr>
            <th>Club</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clubes']->value, 'club');
$_smarty_tpl->tpl_vars['club']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['club']->value) {
$_smarty_tpl->tpl_vars['club']->do_else = false;
?>
        <tr>
            <td><a href="club/<?php echo $_smarty_tpl->tpl_vars['club']->value->id_club;?>
"><?php echo $_smarty_tpl->tpl_vars['club']->value->club;?>
</a></td>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <td><a href="deleteClub/<?php echo $_smarty_tpl->tpl_vars['club']->value->id_club;?>
">Borrar</a></td>
            <?php }?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <div>
        <h2>Crear Club</h2>
        <form action="createClub" method="POST">
            <input type="text" name="club" id="club" placeholder="Club">
            <input type="submit" value="Guardar">
        </form>
    </div>
<?php }
$_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
