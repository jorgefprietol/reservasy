<?php
/* Smarty version 3.1.30, created on 2020-03-26 16:18:43
  from "D:\xampp\htdocs\yanbal\tpl\Admin\Reservations\manage_reservations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7cc7d3c6df26_05238510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64db6537384976cb0a29361d877718f7745ba0d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Admin\\Reservations\\manage_reservations.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Admin/InlineAttributeEdit.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5e7cc7d3c6df26_05238510 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:\\xampp\\htdocs\\yanbal\\lib\\external\\Smarty\\plugins\\function.cycle.php';
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true,'InlineEdit'=>true), 0, false);
?>


<div id="page-manage-reservations" class="admin-page">
	<div>
		<div class="dropdown admin-header-more pull-right">
			<button class="btn btn-default" type="button" id="moreReservationActions" data-toggle="dropdown">
				<span class="glyphicon glyphicon-option-horizontal"></span>
				<span class="caret"></span>
                <span class="no-show">Expand</span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="moreReservationActions">
				<?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
					<li role="presentation">
						<a role="menuitem" href="#" id="import-reservations" class="add-link"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Import'),$_smarty_tpl);?>

							<span class="glyphicon glyphicon-import"></span>
						</a>
					</li>
				<?php }?>
				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['CsvExportUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['CsvExportUrl']->value;?>
" class="add-link" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Export'),$_smarty_tpl);?>

						<span class="glyphicon glyphicon-export"></span>
					</a>
				</li>
                <?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
                    <li role="separator" class="divider"></li>
                    <li role="presentation">
                        <a role="menuitem" href="#" id="addTermsOfService" class="add-link"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TermsOfService'),$_smarty_tpl);?>

                            <span class="glyphicon glyphicon-book"></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="manage_reservation_colors.php" id="addTermsOfService" class="add-link"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationColors'),$_smarty_tpl);?>

                            <span class="fa fa-paint-brush"></span>
                        </a>
                    </li>
                <?php }?>
			</ul>
		</div>
		<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageReservations'),$_smarty_tpl);?>
</h1>
	</div>

	<div class="panel panel-default filterTable" id="filter-reservations-panel">
		<div class="panel-heading"><span class="glyphicon glyphicon-filter"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Filter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>
</div>
		<div class="panel-body">
			<?php $_smarty_tpl->_assignInScope('groupClass', "col-xs-12 col-sm-4 col-md-3");
?>
			<form id="filterForm" role="form">
				<div class="form-group filter-dates <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="startDate" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'StartDate'),$_smarty_tpl);?>
</label>
					<input id="startDate" type="text" class="form-control dateinput inline"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>
"/>
					<input id="formattedStartDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					-
                    <label for="endDate" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'StartDate'),$_smarty_tpl);?>
</label>
                    <input id="endDate" type="text" class="form-control dateinput inline"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>
"/>
					<input id="formattedEndDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
                </div>
				<div class="form-group filter-user <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="userFilter" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</label>
                    <input id="userFilter" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['UserNameFilter']->value;?>
"
						   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
"/>
					<input id="userId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['UserIdFilter']->value;?>
"/>
                    <span class="searchclear glyphicon glyphicon-remove-circle" ref="userFilter,userId"></span>
                </div>
				<div class="form-group filter-schedule <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="scheduleId" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
</label>
                    <select id="scheduleId" class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group filter-resource <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="resourceId" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</label>
                    <select id="resourceId" class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group filter-status <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="statusId" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>
</label>
                    <select id="statusId" class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllReservations'),$_smarty_tpl);?>
</option>
						<option value="<?php echo ReservationStatus::Pending;?>
"
								<?php if ($_smarty_tpl->tpl_vars['ReservationStatusId']->value == ReservationStatus::Pending) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PendingReservations'),$_smarty_tpl);?>
</option>
					</select>
				</div>
				<div class="form-group filter-referenceNumber <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="referenceNumber" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</label>
                    <input id="referenceNumber" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
"
						   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
"/>
                    <span class="searchclear glyphicon glyphicon-remove-circle" ref="referenceNumber"></span>
                </div>
                <div class="form-group filter-title <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="reservationTitle" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Title'),$_smarty_tpl);?>
</label>
                    <input id="reservationTitle" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ReservationTitle']->value;?>
"
						   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Title'),$_smarty_tpl);?>
"/>
                    <span class="searchclear glyphicon glyphicon-remove-circle" ref="reservationTitle"></span>
                </div>
                <div class="form-group filter-title <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="reservationDescription" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationDescription'),$_smarty_tpl);?>
</label>
                    <input id="reservationDescription" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ReservationDescription']->value;?>
"
						   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
"/>
                    <span class="searchclear glyphicon glyphicon-remove-circle" ref="reservationDescription"></span>
                </div>
				<div class="form-group filter-resourceStatus <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="resourceStatusIdFilter" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceStatus'),$_smarty_tpl);?>
</label>
                    <select id="resourceStatusIdFilter" class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResourceStatuses'),$_smarty_tpl);?>
</option>
						<option value="<?php echo ResourceStatus::AVAILABLE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>
</option>
						<option value="<?php echo ResourceStatus::UNAVAILABLE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unavailable'),$_smarty_tpl);?>
</option>
						<option value="<?php echo ResourceStatus::HIDDEN;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Hidden'),$_smarty_tpl);?>
</option>
					</select>
				</div>
				<div class="form-group filter-resourceStatusReason <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="resourceReasonIdFilter" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>
</label>
                    <select id="resourceReasonIdFilter" class="form-control"></select>
				</div>
                <div class="form-group filter-checkin <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <div class="checkbox">
                        <input type="checkbox" id="missedCheckin" <?php if ($_smarty_tpl->tpl_vars['MissedCheckin']->value) {?>checked="checked"<?php }?> />
                        <label for="missedCheckin"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MissedCheckin'),$_smarty_tpl);?>
</label>
                    </div>
                </div>
                <div class="form-group filter-checkout <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <div class="checkbox">
                        <input type="checkbox" id="missedCheckout" <?php if ($_smarty_tpl->tpl_vars['MissedCheckout']->value) {?>checked="checked"<?php }?> />
                        <label for="missedCheckout"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MissedCheckout'),$_smarty_tpl);?>
</label>
                    </div>
                </div>
				<div class="clearfix"></div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AttributeFilters']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'searchmode'=>true,'class'=>"customAttribute filter-customAttribute".((string)$_smarty_tpl->tpl_vars['attribute']->value->Id())." ".((string)$_smarty_tpl->tpl_vars['groupClass']->value)),$_smarty_tpl);?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</form>
		</div>
		<div class="panel-footer">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['filter_button'][0][0]->FilterButton(array('id'=>"filter",'class'=>"btn-sm"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0][0]->ResetButton(array('id'=>"clearFilter",'class'=>"btn-sm"),$_smarty_tpl);?>

		</div>
	</div>

	<table class="table admin-panel" id="reservationTable">
		<?php $_smarty_tpl->_assignInScope('colCount', 11);
?>
		<thead>
		<tr>
			<th class="id hidden">ID</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'User','field'=>ColumnNames::OWNER_LAST_NAME),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Resource','field'=>ColumnNames::RESOURCE_NAME),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Title','field'=>ColumnNames::RESERVATION_TITLE),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Description','field'=>ColumnNames::RESERVATION_DESCRIPTION),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'BeginDate','field'=>ColumnNames::RESERVATION_START),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'EndDate','field'=>ColumnNames::RESERVATION_END),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</th>
			<?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</th>
				<?php $_smarty_tpl->_assignInScope('colCount', $_smarty_tpl->tpl_vars['colCount']->value+1);
?>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['IsDesktop']->value) {?>
				<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</th>
				<?php $_smarty_tpl->_assignInScope('colCount', $_smarty_tpl->tpl_vars['colCount']->value+1);
?>
			<?php }?>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Approve'),$_smarty_tpl);?>
</th>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</th>
			<th class="action">
				<div class="checkbox checkbox-single">
					<input type="checkbox" id="delete-all" aria-label="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
"/>
					<label for="delete-all"></label>
				</div>
			</th>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'reservation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
?>
			<?php smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['reservation']->value->RequiresApproval) {?>
				<?php $_smarty_tpl->_assignInScope('rowCss', 'pending');
?>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('reservationId', $_smarty_tpl->tpl_vars['reservation']->value->ReservationId);
?>
			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['IsDesktop']->value) {?>editable<?php }?>" data-seriesId="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->SeriesId;?>
" data-refnum="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
				<td class="id hidden"><?php echo $_smarty_tpl->tpl_vars['reservationId']->value;?>
</td>
				<td class="user"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['reservation']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['reservation']->value->LastName,'ignorePrivacy'=>true),$_smarty_tpl);?>
</td>
				<td class="resource"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceName;?>

					<?php if ($_smarty_tpl->tpl_vars['reservation']->value->ResourceStatusId == ResourceStatus::AVAILABLE) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status.png"),$_smarty_tpl);?>

						
					<?php } elseif ($_smarty_tpl->tpl_vars['reservation']->value->ResourceStatusId == ResourceStatus::UNAVAILABLE) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-away.png"),$_smarty_tpl);?>

						
					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-busy.png"),$_smarty_tpl);?>

						
					<?php }?>
					
					
					
				</td>
				<td class="reservationTitle"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Title;?>
</td>
				<td class="description"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Description;?>
</td>
				<td class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_reservation_date'),$_smarty_tpl);?>
</td>
				<td class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_reservation_date'),$_smarty_tpl);?>
</td>
				<td class="duration"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->GetDuration()->__toString();?>
</td>
				<td class="referenceNumber"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
					<td class="credits"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->CreditsConsumed;?>
</td>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['IsDesktop']->value) {?>
					<td class="action">
						<a href="#" class="update edit"><span class="fa fa-pencil icon fa-1x"></span></a>
					</td>
				<?php }?>
				<td class="action">
					<?php if ($_smarty_tpl->tpl_vars['reservation']->value->RequiresApproval) {?>
						<a href="#" class="update approve"><span class="fa fa-check icon add"></span></a>
					<?php } else { ?>
						-
					<?php }?>
				</td>
				<td class="action">
					<a href="#" class="update delete">
                        <span class="fa fa-trash icon remove fa-1x"></span>
                        <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</span>
                    </a>
				</td>
				<td class="action no-edit">
					<div class="checkbox checkbox-single">
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_ID','multi'=>true),$_smarty_tpl);?>
 class="delete-multiple" type="checkbox" id="delete<?php echo $_smarty_tpl->tpl_vars['reservationId']->value;?>
"
						value="<?php echo $_smarty_tpl->tpl_vars['reservationId']->value;?>
"
						aria-label="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
"/>
                        <label class="" for="delete<?php echo $_smarty_tpl->tpl_vars['reservationId']->value;?>
"></label>
                    </div>
				</td>
			</tr>
			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" data-seriesId="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->SeriesId;?>
" data-refnum="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colCount']->value;?>
">
					<div class="reservation-list-dates">
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Created'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->CreatedDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LastModified'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->ModifiedDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckInTime'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->CheckinDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckOutTime'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->CheckoutDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'OriginalEndDate'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->OriginalEndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['ReservationAttributes']->value) > 0) {?>
						<div class="reservation-list-attributes">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ReservationAttributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
								<?php ob_start();
echo ManageReservationsActions::UpdateAttribute;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:Admin/InlineAttributeEdit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber,'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'value'=>$_smarty_tpl->tpl_vars['reservation']->value->Attributes->Get($_smarty_tpl->tpl_vars['attribute']->value->Id()),'url'=>((string)$_SERVER['SCRIPT_NAME'])."?action=".$_prefixVariable1), 0, true);
?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</div>
					<?php }?>

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
			<td colspan="<?php echo $_smarty_tpl->tpl_vars['colCount']->value-1;?>
"></td>
			<td class="action-delete">
                <a href="#" id="delete-selected" class="no-show" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
">
                    <span class="fa fa-trash icon remove"></span>
                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</span>
                </a>
            </td>
		</tr>
		</tfoot>
	</table>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


	<div class="modal fade" id="deleteInstanceDialog" tabindex="-1" role="dialog"
		 aria-labelledby="deleteInstanceDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteInstanceForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteInstanceDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="delResResponse"></div>
						<div class="alert alert-warning">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

						</div>

						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>

							   value="<?php echo SeriesUpdateScope::ThisInstance;?>
"/>
						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 value="" class="referenceNumber"/>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="deleteSeriesDialog" tabindex="-1" role="dialog"
		 aria-labelledby="deleteSeriesDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteSeriesForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteSeriesDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

						</div>
						<input type="hidden" id="hdnSeriesUpdateScope" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 />
						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 value="" class="referenceNumber"/>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default cancel"
								data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>

						<button type="button" class="btn btn-danger saveSeries btnUpdateThisInstance" id="btnUpdateThisInstance">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-danger saveSeries btnUpdateAllInstances" id="btnUpdateAllInstances">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-danger saveSeries btnUpdateFutureInstances" id="btnUpdateFutureInstances">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FutureInstances'),$_smarty_tpl);?>

						</button>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="deleteMultipleDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteMultipleModalLabel"
		 aria-hidden="true">
		<form id="deleteMultipleForm" method="post" ajaxAction="<?php echo ManageReservationsActions::DeleteMultiple;?>
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

							<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteMultipleReservationsWarning'),$_smarty_tpl);?>
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

	<div id="inlineUpdateErrorDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="inlineErrorLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="inlineErrorLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Error'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div id="inlineUpdateErrors" class="hidden error">&nbsp;</div>
					<div id="reservationAccessError" class="hidden error"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default cancel"
							data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'OK'),$_smarty_tpl);?>
</button>
				</div>
			</div>
		</div>
	</div>

	<div id="importReservationsDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="importReservationsModalLabel"
		 aria-hidden="true">
		<form id="importReservationsForm" class="form" role="form" method="post" enctype="multipart/form-data"
			  ajaxAction="<?php echo ManageReservationsActions::Import;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="importReservationsModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Import'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div id="importUserResults" class="validationSummary alert alert-danger no-show">
							<ul>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"fileExtensionValidator",'key'=>''),$_smarty_tpl);?>

							</ul>
						</div>
						<div id="importErrors" class="alert alert-danger no-show"></div>
						<div id="importResult" class="alert alert-success no-show">
							<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RowsImported'),$_smarty_tpl);?>
</span>

							<div id="importCount" class="inline bold">0</div>
							<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RowsSkipped'),$_smarty_tpl);?>
</span>

							<div id="importSkipped" class="inline bold">0</div>
							<a class="" href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
 <span
										class="fa fa-refresh"></span></a>
						</div>
						<div class="margin-bottom-25">
                            <label for="reservationImportFile" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'File'),$_smarty_tpl);?>
</label>
							<input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_IMPORT_FILE'),$_smarty_tpl);?>
 id="reservationImportFile" />
						</div>
						<div id="importInstructions" class="alert alert-info">
							<div class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationImportInstructions'),$_smarty_tpl);?>
</div>
							<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=template" download="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=template"
							   target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GetTemplate'),$_smarty_tpl);?>
 <span class="fa fa-download"></span></a>
						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array('key'=>'Import'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

    <div class="modal fade" id="termsOfServiceDialog" tabindex="-1" role="dialog"
         aria-labelledby="termsOfServiceDialogLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="termsOfServiceForm" method="post" ajaxAction="termsOfService" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="termsOfServiceDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TermsOfService'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="radio inline-block">
                                <input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TOS_METHOD'),$_smarty_tpl);?>
 value="manual"
                                       id="tos_manual_radio"
                                       checked="checked" data-ref="tos_manual_div" class="toggle">
                                <label for="tos_manual_radio"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EnterTermsManually'),$_smarty_tpl);?>
</label>
                            </div>
                            <div class="radio inline-block">
                                <input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TOS_METHOD'),$_smarty_tpl);?>
 value="url"
                                       id="tos_url_radio" data-ref="tos_url_div" class="toggle">
                                <label for="tos_url_radio"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LinkToTerms'),$_smarty_tpl);?>
</label>
                            </div>
                            <div class="radio inline-block">
                                <input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TOS_METHOD'),$_smarty_tpl);?>
 value="upload"
                                       id="tos_upload_radio" data-ref="tos_upload_div" class="toggle">
                                <label for="tos_upload_radio"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UploadTerms'),$_smarty_tpl);?>
</label>
                            </div>
                        </div>
                        <div id="tos_manual_div" class="tos-div">
                            <div class="form-group">
                                <label for="tos-manual"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TermsOfService'),$_smarty_tpl);?>
</label>
                                <textarea id="tos-manual" class="form-control" style="width:100%" rows="10" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TOS_TEXT'),$_smarty_tpl);?>
></textarea>
                            </div>
                        </div>
                        <div id="tos_url_div" class="tos-div no-show">
                            <div class="form-group">
                                <label for="tos-url"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LinkToTerms'),$_smarty_tpl);?>
</label>
                                <input type="url" id="tos-url" class="form-control"
                                       placeholder="http://www.example.com/tos.html" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TOS_URL'),$_smarty_tpl);?>
 maxlength="255" />
                            </div>
                        </div>
                        <div id="tos_upload_div" class="tos-div no-show margin-bottom-15">
                            <label for="tos-upload"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TermsOfService'),$_smarty_tpl);?>
 PDF</label>
                            <div class="dropzone" id="termsOfServiceUpload">
                                <div>
                                    <span class="fa fa-file-pdf-o fa-3x"></span><br/>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChooseOrDropFile'),$_smarty_tpl);?>

                                </div>
                                <input id="tos-upload" type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TOS_UPLOAD'),$_smarty_tpl);?>

                                       accept="application/pdf" />
                            </div>
                            <div id="tos-upload-link" class="no-show">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/uploads/tos/tos.pdf" target="_blank">
                                    <span class="fa fa-file-pdf-o"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewTerms'),$_smarty_tpl);?>

                                </a>
                            </div>
                        </div>
                        <div>
                            <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequireTermsOfServiceAcknowledgement'),$_smarty_tpl);?>
</div>
                            <div>
                                <div class="radio inline-block">
                                    <input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TOS_APPLICABILITY'),$_smarty_tpl);?>
 value="<?php echo TermsOfService::RESERVATION;?>
"
                                           id="tos_reservation"
                                           checked="checked">
                                    <label for="tos_reservation"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UponReservation'),$_smarty_tpl);?>
</label>
                                </div>
                                <div class="radio inline-block">
                                    <input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TOS_APPLICABILITY'),$_smarty_tpl);?>
 value="<?php echo TermsOfService::REGISTRATION;?>
"
                                           id="tos_registration">
                                    <label for="tos_registration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UponRegistration'),$_smarty_tpl);?>
</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array('id'=>'deleteTerms','class'=>'no-show'),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array('submit'=>true),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true,'InlineEdit'=>true,'Clear'=>true), 0, false);
?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/reservations.js"),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"autocomplete.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"approval.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"dropzone.js"),$_smarty_tpl);?>


    <?php echo '<script'; ?>
 type="text/javascript">

		function hidePopoversWhenClickAway() {
			$('body').on('click', function (e) {
				$('[rel="popover"]').each(function () {
					if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0)
					{
						$(this).popover('hide');
					}
				});
			});
		}

		function setUpPopovers() {
			$('[rel="popover"]').popover({
				container: 'body', html: true, placement: 'top', content: function () {
					var popoverId = $(this).data('popover-content');
					return $(popoverId).html();
				}
			}).click(function (e) {
				e.preventDefault();
			}).on('show.bs.popover', function () {

			}).on('shown.bs.popover', function () {
				var trigger = $(this);
				var popover = trigger.data('bs.popover').tip();
				popover.find('.editable-cancel').click(function () {
					trigger.popover('hide');
				});
			});
		}

		function setUpEditables() {
			$.fn.editable.defaults.mode = 'popup';
			$.fn.editable.defaults.toggle = 'manual';
			$.fn.editable.defaults.emptyclass = '';
			$.fn.editable.defaults.params = function (params) {
				params.CSRF_TOKEN = $('#csrf_token').val();
				return params;
			};

			var updateUrl = '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=';

			$('.inlineAttribute').editable({
				url: updateUrl + '<?php echo ManageReservationsActions::UpdateAttribute;?>
', emptytext: '-'
			});
		}

		$(document).ready(function () {

			setUpPopovers();
			hidePopoversWhenClickAway();
			setUpEditables();
            dropzone($("#termsOfServiceUpload"));

			var updateScope = {};
			updateScope['btnUpdateThisInstance'] = '<?php echo SeriesUpdateScope::ThisInstance;?>
';
			updateScope['btnUpdateAllInstances'] = '<?php echo SeriesUpdateScope::FullSeries;?>
';
			updateScope['btnUpdateFutureInstances'] = '<?php echo SeriesUpdateScope::FutureInstances;?>
';

			var actions = {};

			var resOpts = {
				autocompleteUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
				reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reservation.php?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[refnum]",
				popupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php",
				updateScope: updateScope,
				actions: actions,
				deleteUrl: '<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_delete.php?<?php echo QueryStringKeys::RESPONSE_TYPE;?>
=json',
				resourceStatusUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=changeStatus',
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                termsOfServiceUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=tos',
                updateTermsOfServiceAction: 'termsOfService',
                deleteTermsOfServiceAction: 'deleteTerms'
			};

			var approvalOpts = {
				url: '<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_approve.php'
			};

			var approval = new Approval(approvalOpts);

			var reservationManagement = new ReservationManagement(resOpts, approval);
			reservationManagement.init();

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'reservation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
?>

			reservationManagement.addReservation({
				id: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReservationId;?>
',
				referenceNumber: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
',
				isRecurring: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->IsRecurring;?>
',
				resourceStatusId: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceStatusId;?>
',
				resourceStatusReasonId: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceStatusReasonId;?>
',
				resourceId: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceId;?>
'
			});
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['StatusReasons']->value, 'reason');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reason']->value) {
?>
			reservationManagement.addStatusReason('<?php echo $_smarty_tpl->tpl_vars['reason']->value->Id();?>
', '<?php echo $_smarty_tpl->tpl_vars['reason']->value->StatusId();?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['reason']->value->Description(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			reservationManagement.initializeStatusFilter('<?php echo $_smarty_tpl->tpl_vars['ResourceStatusFilterId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['ResourceStatusReasonFilterId']->value;?>
');
		});

		$('#filter-reservations-panel').showHidePanel();

	<?php echo '</script'; ?>
>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"startDate",'AltId'=>"formattedStartDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate"),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


	<div id="colorbox">
		<div id="approveDiv" class="wait-box">
			<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Approving'),$_smarty_tpl);?>
</h3>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

		</div>
	</div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
