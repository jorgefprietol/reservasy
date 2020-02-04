<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:09:54
  from "/home/xebloxvgfx88/public_html/yanbal/lang/es/ResetPassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e30951274a316_84547558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfcff49c9f5dfdcd6df6631017b36080fdb47c7' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/lang/es/ResetPassword.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e30951274a316_84547558 (Smarty_Internal_Template $_smarty_tpl) {
?>

Aquí está tu contraseña temporal para Agenda Capacitaciones Yanbal: <?php echo $_smarty_tpl->tpl_vars['TemporaryPassword']->value;?>


<br/>

La contraseña antigua ya no funcionará.
<br/>
<br/>

Por favor <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">inicia sesión en Agenda Capacitaciones Yanbal</a> y cambia la contraseña lo antes posible.<?php }
}
