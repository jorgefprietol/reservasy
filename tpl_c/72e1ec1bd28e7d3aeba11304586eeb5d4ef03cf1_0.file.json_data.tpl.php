<?php
/* Smarty version 3.1.30, created on 2020-02-05 00:11:46
  from "D:\xampp\htdocs\yanbal\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e39fa32c78318_60514955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72e1ec1bd28e7d3aeba11304586eeb5d4ef03cf1' => 
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
function content_5e39fa32c78318_60514955 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
