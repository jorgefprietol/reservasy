<?php
/* Smarty version 3.1.30, created on 2020-03-26 23:05:39
  from "D:\xampp\htdocs\yanbal\tpl\Ajax\user_details.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d2733b8de09_09666555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406b5ccab744e54a71ad64a5b3c9b5cb375bf285' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Ajax\\user_details.tpl',
      1 => 1580159920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d2733b8de09_09666555 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['CanViewUser']->value) {?>
<div id="userDetailsPopup">
	<div id="userDetailsName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['User']->value->FirstName(),'last'=>$_smarty_tpl->tpl_vars['User']->value->LastName(),'ignorePrivacy'=>true),$_smarty_tpl);?>
</div>
	<div id="userDetailsEmail"><span class="label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Email'),$_smarty_tpl);?>
</span> <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['User']->value->EmailAddress();?>
"><?php echo $_smarty_tpl->tpl_vars['User']->value->EmailAddress();?>
</a></div>
	<div id="userDetailsPhone"><span class="label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Phone'),$_smarty_tpl);?>
</span> <a href="tel:<?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttribute(UserAttribute::Phone);?>
"><?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttribute(UserAttribute::Phone);?>
</a></div>
	<div id="userDetailsOrganization"><span class="label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Organization'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttribute(UserAttribute::Organization);?>
</div>
	<div id="userDetailsPosition"><span class="label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Position'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttribute(UserAttribute::Position);?>
</div>
	<div id="userDetailsAttributes">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
		<div class="customAttribute"><span class="label"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</span> <?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttributeValue($_smarty_tpl->tpl_vars['attribute']->value->Id());?>
</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
</div>
<?php }
}
}
