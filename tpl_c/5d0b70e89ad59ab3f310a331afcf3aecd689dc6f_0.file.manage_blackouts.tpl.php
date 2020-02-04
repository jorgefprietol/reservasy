<?php
/* Smarty version 3.1.30, created on 2020-01-28 21:01:53
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Blackouts/manage_blackouts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e30a141d65a92_82561272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0b70e89ad59ab3f310a331afcf3aecd689dc6f' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Blackouts/manage_blackouts.tpl',
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
function content_5e30a141d65a92_82561272 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/xebloxvgfx88/public_html/yanbal/lib/external/Smarty/plugins/function.cycle.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Timepicker'=>true), 0, false);
?>

<div id="page-manage-blackouts" class="admin-page">
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageBlackouts'),$_smarty_tpl);?>
</h1>

	<form id="addBlackoutForm" class="form-inline" role="form" method="post">
		<div class="panel panel-default" id="add-blackout-panel">
			<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddBlackout"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>
</div>
			<div class="panel-body add-contents">

				<div class="form-group col-xs-6">
					<label for="addStartDate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
					<input type="text" id="addStartDate" class="form-control dateinput inline-block "
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddStartDate']->value),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>
 id="formattedAddStartDate" type="hidden"
													 value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddStartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_TIME'),$_smarty_tpl);?>
 type="text" id="addStartTime"
													 class="form-control dateinput inline-block timepicker"
													 value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('format'=>'h:00 A','date'=>'now'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'StartTime'),$_smarty_tpl);?>
"/>
                    <label for="addStartTime" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'StartTime'),$_smarty_tpl);?>
</label>
				</div>
				<div class="form-group col-xs-6">
					<label for="addEndDate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
					<input type="text" id="addEndDate" class="form-control dateinput inline-block " size="10"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddEndDate']->value),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>
 type="hidden" id="formattedAddEndDate"
												   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddEndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_TIME'),$_smarty_tpl);?>
 type="text" id="addEndTime"
												   class="form-control dateinput inline-block timepicker"
												   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('format'=>'h:00 A','date'=>Date::Now()->AddHours(1)),$_smarty_tpl);?>
"
												   title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndTime'),$_smarty_tpl);?>
"/>
                    <label for="addEndTime" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndTime'),$_smarty_tpl);?>
</label>
                </div>
				<div class="form-group col-xs-12">
					<label for="addResourceId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</label>
					<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 class="form-control" id="addResourceId">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl);?>

					</select>
					<?php if (count($_smarty_tpl->tpl_vars['Schedules']->value) > 0) {?>
						|
						<div class="checkbox">
							<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BLACKOUT_APPLY_TO_SCHEDULE'),$_smarty_tpl);?>
 type="checkbox" id="allResources"/>
							<label for="allResources" style=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResourcesOn'),$_smarty_tpl);?>
 </label>
						</div>
                        <label for="addScheduleId" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
 </label>
                        <select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 id="addScheduleId" class="form-control" disabled="disabled"
														   title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl);?>

						</select>
					<?php }?>
				</div>
				<div class="col-xs-12">
					<div class="form-group has-feedback">
						<label for="blackoutReason"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>
</label>
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUMMARY'),$_smarty_tpl);?>
 type="text" id="blackoutReason" required
													  class="form-control required"/>
						<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="blackoutReason"></i>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"RecurrenceControl",'RepeatTerminationDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>

				</div>
				<div class="form-group col-xs-12">
					<div class="radio">
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="bookAround"
															  name="existingReservations"
															  checked="checked"
															  value="<?php echo ReservationConflictResolution::BookAround;?>
"/>
						<label for="bookAround"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutAroundConflicts'),$_smarty_tpl);?>
</label>
					</div>
					<div class="radio">
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="notifyExisting"
															  name="existingReservations"
															  value="<?php echo ReservationConflictResolution::Notify;?>
"/>
						<label for="notifyExisting"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutShowMe'),$_smarty_tpl);?>
</label>
					</div>
					<div class="radio">
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="deleteExisting"
															  name="existingReservations"
															  value="<?php echo ReservationConflictResolution::Delete;?>
"/>
						<label for="deleteExisting"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutDeleteConflicts'),$_smarty_tpl);?>
</label>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array('class'=>"btn-sm"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0][0]->ResetButton(array('class'=>"btn-sm"),$_smarty_tpl);?>

			</div>
		</div>
	</form>

	<form class="form" role="form">
		<div class="panel panel-default">
			<div class="panel-heading"><span class="glyphicon glyphicon-filter"></span>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Filter"),$_smarty_tpl);?>

			</div>
			<div class="panel-body">
				<div class="form-group col-xs-4">
					<input id="startDate" type="text" class="form-control dateinput inline-block"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>
"
						   title="Between start date" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
"/>
					<input id="formattedStartDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					-
					<input id="endDate" type="text" class="form-control dateinput inline-block"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
"/>
					<input id="formattedEndDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
                    <label for="startDate" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'StartDate'),$_smarty_tpl);?>
</label>
                    <label for="endDate" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>

                </div>
				<div class="form-group col-xs-4">
                    <label for="scheduleId" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
 </label>

                    <select id="scheduleId" class="form-control col-xs-12">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group col-xs-4">
                    <label for="resourceId" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
 </label>

                    <select id="resourceId" class="form-control col-xs-12">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl);?>

					</select>
				</div>
			</div>
			<div class="panel-footer">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['filter_button'][0][0]->FilterButton(array('class'=>"btn-sm",'id'=>"filter"),$_smarty_tpl);?>

				<button id="showAll" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewAll'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</form>

	<table class="table" id="blackoutTable">
		<thead>
		<tr>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Resource','field'=>ColumnNames::RESOURCE_NAME),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'BeginDate','field'=>ColumnNames::BLACKOUT_START),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'EndDate','field'=>ColumnNames::BLACKOUT_END),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Reason','field'=>ColumnNames::BLACKOUT_TITLE),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreatedBy'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</th>
			<th class="action-delete">
				<div class="checkbox checkbox-single">
					<input type="checkbox" id="delete-all" aria-label="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
"/>
					<label for="delete-all" class="no-show">All</label>
				</div>
			</th>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blackouts']->value, 'blackout');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blackout']->value) {
?>
			<?php smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['blackout']->value->InstanceId);
?>
			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 editable" data-blackout-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['blackout']->value->ResourceName;?>
</td>
				<td class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
				<td class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['blackout']->value->Title;?>
</td>
				<td style="max-width:150px;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['blackout']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['blackout']->value->LastName),$_smarty_tpl);?>
</td>
				<td class="update edit"><a href="#"><span class="fa fa-edit"></span></a></td>
				<?php if ($_smarty_tpl->tpl_vars['blackout']->value->IsRecurring) {?>
					<td class="update">
						<a href="#" class="update delete-recurring"><span class="fa fa-trash icon remove"></span></a>
					</td>
				<?php } else { ?>
					<td class="update">
						<a href="#" class="update delete"><span class="fa fa-trash icon remove"></span></a>
					</td>
				<?php }?>
				<td class="action-delete">
					<div class="checkbox checkbox-single">
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BLACKOUT_INSTANCE_ID','multi'=>true),$_smarty_tpl);?>
 class="delete-multiple" type="checkbox" id="delete<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						aria-label="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
"/>
						<label for="delete<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="no-show">Delete</label>
					</div>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</tbody>
		<tfoot>
		<tr>
			<td colspan="7"></td>
			<td class="action-delete"><a href="#" id="delete-selected" class="no-show" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
<span class="fa fa-trash icon remove"></span></a></td>
		</tr>
		</tfoot>
	</table>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="deleteModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-warning">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

					</div>
				</div>
				<div class="modal-footer">
					<form id="deleteForm" method="post">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array('class'=>"btnUpdateAllInstances"),$_smarty_tpl);?>

					</form>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="deleteRecurringDialog" tabindex="-1" role="dialog" aria-labelledby="deleteRecurringModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="deleteRecurringModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-warning">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

					</div>
				</div>
				<div class="modal-footer">
					<form id="deleteRecurringForm" method="post">
						<button type="button" class="btn btn-default cancel"
								data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>

						<button type="button" class="btn btn-danger save btnUpdateThisInstance">
							<span class="fa fa-remove"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>
</button>

						<button type="button" class="btn btn-danger save btnUpdateAllInstances">
							<span class="fa fa-remove"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>
</button>

						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 class="hdnSeriesUpdateScope"
							   value="<?php echo SeriesUpdateScope::FullSeries;?>
"/>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="deleteMultipleDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteMultipleModalLabel"
		 aria-hidden="true">
		<form id="deleteMultipleForm" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::DELETE_MULTIPLE;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteMultipleModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
 (<span id="deleteMultipleCount"></span>)</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</div>
						</div>

					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
					<div id="deleteMultiplePlaceHolder" class="no-show"></div>
				</div>
			</div>
		</form>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Timepicker'=>true), 0, false);
?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/blackouts.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"date-helper.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"recurrence.js"),$_smarty_tpl);?>


	<?php echo '<script'; ?>
 type="text/javascript">

		$(document).ready(function () {
			var updateScope = {};
			updateScope.instance = '<?php echo SeriesUpdateScope::ThisInstance;?>
';
			updateScope.full = '<?php echo SeriesUpdateScope::FullSeries;?>
';
			updateScope.future = '<?php echo SeriesUpdateScope::FutureInstances;?>
';

			var actions = {};

			var blackoutOpts = {
				scopeOpts: updateScope,
				actions: actions,
				deleteUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::DELETE;?>
&<?php echo QueryStringKeys::BLACKOUT_ID;?>
=',
				addUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::ADD;?>
',
				editUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::LOAD;?>
&<?php echo QueryStringKeys::BLACKOUT_ID;?>
=',
				updateUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::UPDATE;?>
',
				reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reservation.php?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[refnum]",
				popupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php",
				timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
'
			};

			var recurOpts = {
				repeatType: '<?php echo $_smarty_tpl->tpl_vars['RepeatType']->value;?>
',
				repeatInterval: '<?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
',
				repeatMonthlyType: '<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
',
				repeatWeekdays: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RepeatWeekdays']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
echo $_smarty_tpl->tpl_vars['day']->value;?>
, <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
]
			};

			var recurElements = {
				beginDate: $('#formattedAddStartDate'), endDate: $('#formattedAddEndDate'), beginTime: $('#addStartTime'), endTime: $('#addEndTime')
			};

			var recurrence = new Recurrence(recurOpts, recurElements);
			recurrence.init();

			var blackoutManagement = new BlackoutManagement(blackoutOpts);
			blackoutManagement.init();

			$('#add-blackout-panel').showHidePanel();
		});

		$.blockUI.defaults.css.width = '60%';
		$.blockUI.defaults.css.left = '20%';
	<?php echo '</script'; ?>
>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"startDate",'AltId'=>"formattedStartDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"addStartDate",'AltId'=>"formattedAddStartDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"addEndDate",'AltId'=>"formattedAddEndDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndRepeat",'AltId'=>"formattedEndRepeat"),$_smarty_tpl);?>


	<div id="wait-box" class="wait-box">
		<div id="creatingNotification">
			<h3>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13699238495e30a141d5fdf7_46720978', "ajaxMessage");
?>

			</h3>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

		</div>
		<div id="result"></div>
	</div>

	<div id="update-box" class="no-show">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>"update-spinner"),$_smarty_tpl);?>

		<div id="update-contents"></div>
	</div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
/* {block "ajaxMessage"} */
class Block_13699238495e30a141d5fdf7_46720978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
...
				<?php
}
}
/* {/block "ajaxMessage"} */
}
