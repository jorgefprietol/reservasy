<?php
/* Smarty version 3.1.30, created on 2020-03-26 22:47:03
  from "D:\xampp\htdocs\yanbal\tpl\Ajax\reservation\update_successful.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d22d7c018e6_01843143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c2ea7088cc54e7c565aa43b5723f6b7a3553be' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Ajax\\reservation\\update_successful.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Ajax/reservation/save_successful.tpl' => 1,
  ),
),false)) {
function content_5e7d22d7c018e6_01843143 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:Ajax/reservation/save_successful.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('divId'=>"reservation-updated",'messageKey'=>"ReservationUpdated"), 0, false);
}
}
