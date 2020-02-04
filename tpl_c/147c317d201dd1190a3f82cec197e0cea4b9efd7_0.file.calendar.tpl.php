<?php
/* Smarty version 3.1.30, created on 2020-02-05 00:11:41
  from "D:\xampp\htdocs\yanbal\tpl\Calendar\calendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e39fa2d26ed15_84001178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '147c317d201dd1190a3f82cec197e0cea4b9efd7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Calendar\\calendar.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5e39fa2d26ed15_84001178 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['pageUrl']->value == null) {
ob_start();
echo Pages::CALENDAR;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
}
$_smarty_tpl->_assignInScope('pageIdSuffix', "calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "calendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
