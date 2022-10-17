<?php
/* Smarty version 4.2.1, created on 2022-10-17 14:55:19
  from 'C:\xampp\htdocs\proyectos\tpe\Template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d50b7aa1dd5_46421897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6115e8e0a90fda353432adbe1bd46e8166314055' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\Template\\header.tpl',
      1 => 1666011315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d50b7aa1dd5_46421897 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    
</head>
<body>
    <header>
        <div class="titulo">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        </div>
        <nav>
            <ul class="nav">
                <li><a href="home">Home</a></li>
                <li><a href="clubes">Clubes</a></li>
                <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
                    <li><a href="login">Log In</a></li>
                <?php } else { ?>
                    <li><a href="logout">Log Out</a></li>
                <?php }?>
            </ul>
        </nav>
    </header><?php }
}
