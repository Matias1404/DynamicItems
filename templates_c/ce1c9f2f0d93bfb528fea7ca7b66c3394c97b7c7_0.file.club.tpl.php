<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:06:12
  from 'C:\xampp\htdocs\proyectos\tpe\Template\club.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d6f64a76be9_94638694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce1c9f2f0d93bfb528fea7ca7b66c3394c97b7c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\Template\\club.tpl',
      1 => 1666019171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634d6f64a76be9_94638694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Numero</th>
            <th>Posicion</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
            <tr>
                <td><a href="jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->numero;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <div>
        <h2>Editar Club</h2>
        <form action="editClub/<?php echo $_smarty_tpl->tpl_vars['club']->value->id_club;?>
" method="POST">
            <input type="text" name="club" id="club" placeholder="Club">
            <input type="submit" value="Editar">
        </form>
    </div>
<?php }
$_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
