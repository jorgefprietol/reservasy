<?php
/* Smarty version 3.1.30, created on 2020-03-16 23:57:57
  from "D:\xampp\htdocs\yanbal\tpl\MyAccount\password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e700475638359_31020685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ede09e8ddcf8773bbbc9b6d8fff122ef44b2fbd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\MyAccount\\password.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5e700475638359_31020685 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-change-password">

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['validation_group'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['validation_group'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'ValidationGroup'))) {
throw new SmartyException('block tag \'validation_group\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('validation_group', array('class'=>"alert alert-danger"));
$_block_repeat1=true;
echo $_block_plugin1->ValidationGroup(array('class'=>"alert alert-danger"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0][0]->Validator(array('id'=>"currentpassword",'key'=>"InvalidPassword"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0][0]->Validator(array('id'=>"passwordmatch",'key'=>"PwMustMatch"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0][0]->Validator(array('id'=>"passwordcomplexity",'key'=>''),$_smarty_tpl);?>

	<?php $_block_repeat1=false;
echo $_block_plugin1->ValidationGroup(array('class'=>"alert alert-danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>



	<?php if (!$_smarty_tpl->tpl_vars['AllowPasswordChange']->value) {?>
		<div class="alert alert-danger">
			<i class="fa fa-warning fa-2x"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PasswordControlledExternallyError'),$_smarty_tpl);?>

		</div>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['ResetPasswordSuccess']->value) {?>
			<div class="success alert alert-success col-xs-12 col-sm-8 col-sm-offset-2">
				<span class="glyphicon glyphicon-ok-sign"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PasswordChangedSuccessfully'),$_smarty_tpl);?>

			</div>
		<?php }?>
		<div id="password-reset-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">
			<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangePassword"),$_smarty_tpl);?>
</h1>

			<form id="password-reset-form" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">

				<div class="form-group">
					<label for="<?php echo FormKeys::CURRENT_PASSWORD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"CurrentPassword"),$_smarty_tpl);?>
</label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"CURRENT_PASSWORD"),$_smarty_tpl);?>

				</div>

				<div class="form-group">
					<label for="<?php echo FormKeys::PASSWORD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NewPassword"),$_smarty_tpl);?>
</label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"PASSWORD"),$_smarty_tpl);?>

				</div>

				<div class="form-group">
					<label for="<?php echo FormKeys::PASSWORD_CONFIRM;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"PasswordConfirmation"),$_smarty_tpl);?>
</label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"PASSWORD_CONFIRM",'value'=>''),$_smarty_tpl);?>


				</div>

				<div class="form-group">
					<button type="submit" name="<?php echo Actions::CHANGE_PASSWORD;?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangePassword'),$_smarty_tpl);?>
"
							class="btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangePassword'),$_smarty_tpl);?>
</button>
				</div>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

			</form>
		</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0][0]->SetFocus(array('key'=>'CURRENT_PASSWORD'),$_smarty_tpl);?>

	<?php }?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
