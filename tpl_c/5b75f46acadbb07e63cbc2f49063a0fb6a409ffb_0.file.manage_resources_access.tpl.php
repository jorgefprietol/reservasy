<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:18:01
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Resources/manage_resources_access.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3096f954f174_16502431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b75f46acadbb07e63cbc2f49063a0fb6a409ffb' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Resources/manage_resources_access.tpl',
      1 => 1580159920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3096f954f174_16502431 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="startNoticeAdd"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeAdd()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="startNoticeUpdate"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeUpdate()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeUpdate','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNoneUpdate'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="startNoticeDelete"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeDelete()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeDelete','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNoneDelete'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="endNotice"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxNotice()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="requiresApproval"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApprovalNone'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="autoAssign"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionNotAutoGranted'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="enableCheckin"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresCheckInNotification'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoCheckInRequiredNotification'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="autoRelease"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsAutoReleased()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes()),$_smarty_tpl);?>

	<?php }?>
</div>
<?php }
}
