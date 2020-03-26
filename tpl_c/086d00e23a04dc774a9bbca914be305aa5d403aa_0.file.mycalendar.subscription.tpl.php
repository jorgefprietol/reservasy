<?php
/* Smarty version 3.1.30, created on 2020-03-20 18:51:03
  from "D:\xampp\htdocs\yanbal\tpl\Calendar\mycalendar.subscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e750287d3c979_54455492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086d00e23a04dc774a9bbca914be305aa5d403aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Calendar\\mycalendar.subscription.tpl',
      1 => 1568865098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e750287d3c979_54455492 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="calendarSubscription" class="calendar-subscription">
    <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value && $_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a href="#" id="turnOffSubscription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"switch-minus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOffSubscription'),$_smarty_tpl);?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a href="#" id="turnOnSubscription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"switch-plus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</a>
    <?php }?>
</div><?php }
}
