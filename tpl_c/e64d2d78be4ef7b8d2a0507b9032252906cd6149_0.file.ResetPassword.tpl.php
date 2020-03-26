<?php
/* Smarty version 3.1.30, created on 2020-03-16 23:39:40
  from "D:\xampp\htdocs\yanbal\lang\es\ResetPassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e70002c40ba68_61873335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64d2d78be4ef7b8d2a0507b9032252906cd6149' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\lang\\es\\ResetPassword.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e70002c40ba68_61873335 (Smarty_Internal_Template $_smarty_tpl) {
?>

Aquí está tu contraseña temporal para Agenda Capacitaciones Yanbal: <?php echo $_smarty_tpl->tpl_vars['TemporaryPassword']->value;?>


<br/>

La contraseña antigua ya no funcionará.
<br/>
<br/>

Por favor <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">inicia sesión en Agenda Capacitaciones Yanbal</a> y cambia la contraseña lo antes posible.<?php }
}
