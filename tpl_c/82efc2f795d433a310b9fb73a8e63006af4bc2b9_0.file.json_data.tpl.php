<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:21:25
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3097c509d447_78806936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82efc2f795d433a310b9fb73a8e63006af4bc2b9' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/json_data.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3097c509d447_78806936 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
