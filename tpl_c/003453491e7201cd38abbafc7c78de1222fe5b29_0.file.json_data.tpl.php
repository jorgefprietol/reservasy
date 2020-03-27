<?php
/* Smarty version 3.1.30, created on 2020-03-26 23:02:22
  from "D:\xampp\htdocs\yanbal\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d266e2755b9_74546903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003453491e7201cd38abbafc7c78de1222fe5b29' => 
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
function content_5e7d266e2755b9_74546903 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
