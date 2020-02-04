<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:19:33
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Controls/RecurrenceDiv.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e309755cc1b48_16169228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cae97cc4280662525537e0e9581d81497429574' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Controls/RecurrenceDiv.tpl',
      1 => 1580159970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e309755cc1b48_16169228 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home/xebloxvgfx88/public_html/yanbal/lib/external/Smarty/plugins/function.html_options.php';
?>

<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDiv" class="repeat-div">
	<div class="form-group">
		<div class="col-xs-12">
			<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOptions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatPrompt"),$_smarty_tpl);?>
</label>
			<select id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOptions" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_options'),$_smarty_tpl);?>

					class="form-control input-sm repeat-drop inline-block">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RepeatOptions']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['v']->value['key']),$_smarty_tpl);?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
		</div>

		<div class="col-sm-4 col-xs-12">
			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatEveryDiv" class="recur-toggle no-show days weeks months years">
				<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatInterval"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatEveryPrompt"),$_smarty_tpl);?>
</label>
				<select id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatInterval" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_every'),$_smarty_tpl);?>

						class="form-control input-sm repeat-interval-drop inline-block">
					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['RepeatEveryOptions']->value,'output'=>$_smarty_tpl->tpl_vars['RepeatEveryOptions']->value),$_smarty_tpl);?>

				</select>
				<span class="days"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['daily']['everyKey']),$_smarty_tpl);?>
</span>
				<span class="weeks"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['weekly']['everyKey']),$_smarty_tpl);?>
</span>
				<span class="months"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['monthly']['everyKey']),$_smarty_tpl);?>
</span>
				<span class="years"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['yearly']['everyKey']),$_smarty_tpl);?>
</span>
			</div>
		</div>

		<div class="col-sm-8 col-xs-12">
			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOnWeeklyDiv" class="recur-toggle weeks no-show">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay0" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_sunday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DaySundayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_monday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayMondayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay2" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_tuesday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayTuesdayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay3" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_wednesday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayWednesdayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay4" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_thursday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayThursdayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay5" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_friday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayFridayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay6" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_saturday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DaySaturdayAbbr"),$_smarty_tpl);?>

					</label>
				</div>
			</div>

			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOnMonthlyDiv" class="recur-toggle months no-show">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default btn-sm active">
						<input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REPEAT_MONTHLY_TYPE'),$_smarty_tpl);?>

							   value="<?php echo RepeatMonthlyType::DayOfMonth;?>
"
							   id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatMonthDay" checked="checked"/>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"repeatDayOfMonth"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REPEAT_MONTHLY_TYPE'),$_smarty_tpl);?>

							   value="<?php echo RepeatMonthlyType::DayOfWeek;?>
"
							   id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatMonthWeek"/>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"repeatDayOfWeek"),$_smarty_tpl);?>

					</label>
				</div>
			</div>
		</div>

		<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatUntilDiv" class="col-xs-12 no-show recur-toggle">
			<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
EndRepeat"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatUntilPrompt"),$_smarty_tpl);?>
</label>
			<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
EndRepeat" class="form-control input-sm inline-block dateinput"
				   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>
"/>
			<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
formattedEndRepeat" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'end_repeat_date'),$_smarty_tpl);?>

				   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
		</div>
	</div>
</div>
<?php }
}
