<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:26:17
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/MyAccount/notification-preferences.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3098e9e891a7_49267832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d96ac3c1561edbfef8f6fd768ee3f4d1187c13e' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/MyAccount/notification-preferences.tpl',
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
function content_5e3098e9e891a7_49267832 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>"my-account.css"), 0, false);
?>


<div class="page-notification-preferences">

	<?php if ($_smarty_tpl->tpl_vars['PreferencesUpdated']->value) {?>
		<div class="success alert alert-success col-xs-12 col-sm-8 col-sm-offset-2">
			<span class="glyphicon glyphicon-ok-sign"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourSettingsWereUpdated'),$_smarty_tpl);?>

		</div>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['EmailEnabled']->value) {?>
		<div class="error"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EmailDisabled'),$_smarty_tpl);?>
</div>
	<?php } else { ?>
		<div id="notification-preferences-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">
			<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NotificationPreferences'),$_smarty_tpl);?>
</h1>

			<form id="notification-preferences-form" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
				<div>
					<div class="notification-row">
						<div class="notification-type">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationCreatedPreference'),$_smarty_tpl);?>

						</div>

						<div class="btn-group form-group" data-toggle="buttons">
							<label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['Created']->value) {?>active<?php }?>">
								<input id="createdYes" type="radio" name="<?php echo ReservationEvent::Created;?>
" value="1"
									   <?php if ($_smarty_tpl->tpl_vars['Created']->value) {?>checked="checked"<?php }?>/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>

							</label>
							<label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['Created']->value) {?>active<?php }?>">
								<input id="createdNo" type="radio" name="<?php echo ReservationEvent::Created;?>
" value="0"
									   <?php if (!$_smarty_tpl->tpl_vars['Created']->value) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
						</div>
					</div>

					<div class="notification-row">
						<div class="notification-type">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationUpdatedPreference'),$_smarty_tpl);?>

						</div>

						<div class="btn-group form-group" data-toggle="buttons">
							<label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['Updated']->value) {?>active<?php }?>">
								<input id="updatedYes" type="radio" name="<?php echo ReservationEvent::Updated;?>
" value="1"
									   <?php if ($_smarty_tpl->tpl_vars['Updated']->value) {?>checked="checked"<?php }?>/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>

							</label>
							<label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['Updated']->value) {?>active<?php }?>">
								<input id="updatedNo" type="radio" name="<?php echo ReservationEvent::Updated;?>
" value="0"
									   <?php if (!$_smarty_tpl->tpl_vars['Updated']->value) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
						</div>
					</div>

					<div class="notification-row">
						<div class="notification-type">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationDeletedPreference'),$_smarty_tpl);?>

						</div>

						<div class="btn-group form-group" data-toggle="buttons">
							<label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['Deleted']->value) {?>active<?php }?>">
								<input id="deletedYes" type="radio" name="<?php echo ReservationEvent::Deleted;?>
" value="1"
									   <?php if ($_smarty_tpl->tpl_vars['Deleted']->value) {?>checked="checked"<?php }?>/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>

							</label>
							<label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['Deleted']->value) {?>active<?php }?>">
								<input id="deletedNo" type="radio" name="<?php echo ReservationEvent::Deleted;?>
" value="0"
									   <?php if (!$_smarty_tpl->tpl_vars['Deleted']->value) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
						</div>
					</div>

					<div class="notification-row alt">
						<div class="notification-type">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationApprovalPreference'),$_smarty_tpl);?>

						</div>

						<div class="btn-group form-group" data-toggle="buttons">
							<label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['Approved']->value) {?>active<?php }?>">
								<input id="approvedYes" type="radio" name="<?php echo ReservationEvent::Approved;?>
" value="1"
									   <?php if ($_smarty_tpl->tpl_vars['Approved']->value) {?>checked="checked"<?php }?>/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>

							</label>
							<label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['Approved']->value) {?>active<?php }?>">
								<input id="approvedNo" type="radio" name="<?php echo ReservationEvent::Approved;?>
" value="0"
									   <?php if (!$_smarty_tpl->tpl_vars['Approved']->value) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
						</div>
					</div>

                    <div class="notification-row">
                        <div class="notification-type">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationParticipationActivityPreference'),$_smarty_tpl);?>

                        </div>

                        <div class="btn-group form-group" data-toggle="buttons">
                            <label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['ParticipantChanged']->value) {?>active<?php }?>">
                                <input id="endingYes" type="radio" name="<?php echo ReservationEvent::ParticipationChanged;?>
" value="1"
                                       <?php if ($_smarty_tpl->tpl_vars['ParticipantChanged']->value) {?>checked="checked"<?php }?>/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>

                            </label>
                            <label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['ParticipantChanged']->value) {?>active<?php }?>">
                                <input id="endingNo" type="radio" name="<?php echo ReservationEvent::ParticipationChanged;?>
" value="0"
                                       <?php if (!$_smarty_tpl->tpl_vars['ParticipantChanged']->value) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
                        </div>
                    </div>

                    <div class="notification-row-alt">
                        <div class="notification-type">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationSeriesEndingPreference'),$_smarty_tpl);?>

                        </div>

                        <div class="btn-group form-group" data-toggle="buttons">
                            <label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['SeriesEnding']->value) {?>active<?php }?>">
                                <input id="endingYes" type="radio" name="<?php echo ReservationEvent::SeriesEnding;?>
" value="1"
                                       <?php if ($_smarty_tpl->tpl_vars['SeriesEnding']->value) {?>checked="checked"<?php }?>/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>

                            </label>
                            <label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['SeriesEnding']->value) {?>active<?php }?>">
                                <input id="endingNo" type="radio" name="<?php echo ReservationEvent::SeriesEnding;?>
" value="0"
                                       <?php if (!$_smarty_tpl->tpl_vars['SeriesEnding']->value) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
                        </div>
                    </div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary update prompt" name="<?php echo Actions::SAVE;?>
">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

					</button>
				</div>
			</form>
		</div>
	<?php }?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
