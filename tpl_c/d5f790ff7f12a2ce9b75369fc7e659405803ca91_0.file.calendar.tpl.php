<?php
/* Smarty version 3.1.30, created on 2020-01-28 05:07:49
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Calendar/calendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e2fc1a54433f9_57626102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f790ff7f12a2ce9b75369fc7e659405803ca91' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Calendar/calendar.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5e2fc1a54433f9_57626102 (Smarty_Internal_Template $_smarty_tpl) {
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
