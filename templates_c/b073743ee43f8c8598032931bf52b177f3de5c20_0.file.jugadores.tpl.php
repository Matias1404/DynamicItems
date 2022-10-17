<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:04:12
  from 'C:\xampp\htdocs\proyectos\tpe\Template\jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d6eec31a6c6_44823635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b073743ee43f8c8598032931bf52b177f3de5c20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\Template\\jugadores.tpl',
      1 => 1666019037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634d6eec31a6c6_44823635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="jugadores">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Numero</th>
            <th>Posicion</th>
            <th>Club</th>
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
                <td><a href="club/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_club;?>
"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->club;?>
</a></td>
                <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                    <td><a href="deleteJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
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
        <h2>Agregar jugador</h2>
        <form action="createJugador" method="POST">
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
            <input type="submit" value="Guardar">
        </form>
    </div>
<?php }
$_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
