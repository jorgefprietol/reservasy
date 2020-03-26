<?php
/* Smarty version 3.1.30, created on 2020-03-20 18:51:37
  from "D:\xampp\htdocs\yanbal\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7502a913bcb6_80764656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4391a5c97b55e79bb12a69c16c32d11336e4f789' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\json_data.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7502a913bcb6_80764656 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
