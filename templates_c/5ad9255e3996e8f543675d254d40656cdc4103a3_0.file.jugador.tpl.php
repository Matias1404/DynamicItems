<?php
/* Smarty version 4.2.1, created on 2022-10-17 16:52:19
  from 'C:\xampp\htdocs\proyectos\tpe\Template\jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d6c23377779_18657340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad9255e3996e8f543675d254d40656cdc4103a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\Template\\jugador.tpl',
      1 => 1666018337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634d6c23377779_18657340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="jugador">
    <li>Numero: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->numero;?>
</li>
    <li>Posicion: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</li>
    <li>Club: <a href="club/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_club;?>
"> <?php echo $_smarty_tpl->tpl_vars['jugador']->value->club;?>
</a></li>
</ul>       
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <div>
    <h2>Editar jugador</h2>
        <form action="editJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
" method="POST">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input type="number" name="numero" id="numero" placeholder="Numero">
            <input type="text" name="posicion" id="posicion" placeholder="Posicion">
            <select name="club">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clubes']->value, 'club');
$_smarty_tpl->tpl_vars['club']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['club']->value) {
$_smarty_tpl->tpl_vars['club']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['club']->value->id_club;?>
"><?php echo $_smarty_tpl->tpl_vars['club']->value->club;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="submit" value="Editar">
        </form>
    </div>
<?php }
$_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
