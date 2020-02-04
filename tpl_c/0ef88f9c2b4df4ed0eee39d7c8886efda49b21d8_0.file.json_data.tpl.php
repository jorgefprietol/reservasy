<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:20:53
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3097a590d547_93069686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef88f9c2b4df4ed0eee39d7c8886efda49b21d8' => 
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
function content_5e3097a590d547_93069686 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
