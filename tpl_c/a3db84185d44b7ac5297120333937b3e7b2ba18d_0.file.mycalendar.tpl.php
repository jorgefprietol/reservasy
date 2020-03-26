<?php
/* Smarty version 3.1.30, created on 2020-03-20 18:51:03
  from "D:\xampp\htdocs\yanbal\tpl\Calendar\mycalendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e750287d133c9_36574096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3db84185d44b7ac5297120333937b3e7b2ba18d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Calendar\\mycalendar.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5e750287d133c9_36574096 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php ob_start();
echo Pages::MY_CALENDAR;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
$_smarty_tpl->_assignInScope('pageIdSuffix', "my-calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "mycalendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
