<?php
/* Smarty version 3.1.30, created on 2020-01-28 05:07:49
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Calendar/calendar.subscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e2fc1a57070d0_34784140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '949ee6d1b2dba8220b66acd104305e3cf9f73853' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Calendar/calendar.subscription.tpl',
      1 => 1568865098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2fc1a57070d0_34784140 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="calendarSubscription" class="calendar-subscription">
    <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value && $_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a id="subscribeToCalendar"
           href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-share.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SubscribeToCalendar'),$_smarty_tpl);?>
</a>
        <br/>
        URL:
        <span class="note"><?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
</span>
    <?php }?>
</div>

<?php }
}
