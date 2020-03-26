<?php
/* Smarty version 3.1.30, created on 2020-03-26 16:18:29
  from "D:\xampp\htdocs\yanbal\tpl\Admin\Resources\manage_resources.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7cc7c54d4c57_51191494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3779d16c68dd72af6738e565c38f16bfc026fbd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Admin\\Resources\\manage_resources.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Admin/Resources/manage_resources_duration.tpl' => 1,
    'file:Admin/Resources/manage_resources_credits.tpl' => 1,
    'file:Admin/Resources/manage_resources_capacity.tpl' => 1,
    'file:Admin/Resources/manage_resources_access.tpl' => 1,
    'file:Admin/Resources/manage_resources_groups.tpl' => 1,
    'file:Admin/Resources/manage_resources_public.tpl' => 1,
    'file:Admin/InlineAttributeEdit.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5e7cc7c54d4c57_51191494 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'D:\\xampp\\htdocs\\yanbal\\lib\\external\\Smarty\\plugins\\function.html_options.php';
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('InlineEdit'=>true,'Owl'=>true), 0, false);
?>


<div id="page-manage-resources" class="admin-page">
	<div>
		<div class="dropdown admin-header-more pull-right">
			<button class="btn btn-default" type="button" id="moreResourceActions" data-toggle="dropdown">
                <span class="no-show">More</span>
				<span class="glyphicon glyphicon-option-horizontal"></span>
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="moreResourceActions">

				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceGroups"),$_smarty_tpl);?>
</a>
				</li>
				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_types.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceTypes"),$_smarty_tpl);?>
</a>
				</li>
				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_status.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceStatus"),$_smarty_tpl);?>
</a>
				</li>
				<li role="presentation" class="divider"></li>
				<li role="presentation">
					<a role="menuitem" href="#" class="import-resources" id="import-resources">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ImportResources"),$_smarty_tpl);?>

						<span class="glyphicon glyphicon-import"></span>
					</a>
				</li>
				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['ExportUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ExportUrl']->value;?>
" class="export-resources" id="export-resources" target="_blank">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ExportResources"),$_smarty_tpl);?>

						<span class="glyphicon glyphicon-export"></span>
					</a>
				</li>
				<li role="presentation" class="divider"></li>
				<li role="presentation">
					<a role="menuitem" href="#" class="add-resource" id="add-resource"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddResource"),$_smarty_tpl);?>

						<span class="fa fa-plus-circle icon add"></span>
					</a>
				</li>
				<?php if (!empty($_smarty_tpl->tpl_vars['Resources']->value)) {?>
					<li role="presentation">
						<a role="menuitem" href="#" id="bulkUpdatePromptButton"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BulkResourceUpdate'),$_smarty_tpl);?>
</a>
					</li>
				<?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['Resources']->value)) {?>
					<li role="presentation">
						<a role="menuitem" href="#" id="bulkDeletePromptButton"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BulkResourceDelete'),$_smarty_tpl);?>
</a>
					</li>
				<?php }?>
			</ul>
		</div>

		<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageResources'),$_smarty_tpl);?>
</h1>
	</div>

	<div class="panel panel-default filterTable" id="filter-resources-panel">
        <form id="filterForm" class="horizontal-list" role="form" method="get">
		<div class="panel-heading"><span
					class="glyphicon glyphicon-filter"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Filter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>

		</div>
		<div class="panel-body">

				<?php $_smarty_tpl->_assignInScope('groupClass', "col-xs-12 col-sm-4 col-md-3");
?>

				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="filterResourceName" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</label>
					<input type="text" id="filterResourceName" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NAME'),$_smarty_tpl);?>

						   value="<?php echo $_smarty_tpl->tpl_vars['ResourceNameFilter']->value;?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
"/>
                    <span class="searchclear glyphicon glyphicon-remove-circle" ref="filterResourceName"></span>

                </div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="filterScheduleId" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
</label>
                    <select id="filterScheduleId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['AllSchedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleIdFilter']->value),$_smarty_tpl);?>

					</select>
				</div>

				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="filterResourceType" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</label>
                    <select id="filterResourceType" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
>
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResourceTypes'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['ResourceTypes']->value,'key'=>'Id','label'=>"Name",'selected'=>$_smarty_tpl->tpl_vars['ResourceTypeFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="resourceStatusIdFilter" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceStatus'),$_smarty_tpl);?>
</label>
                    <select id="resourceStatusIdFilter" style="width:auto;" class="form-control inline" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl);?>
>
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
                    <label for="resourceReasonIdFilter" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>
</label>
                    <select id="resourceReasonIdFilter" style="width:auto;" class="form-control inline" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl);?>
>
						<option value="">-</option>
					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="filterCapacity" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>
</label>
                    <input type="number" min="0" id="filterCapacity" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>

						   value="<?php echo $_smarty_tpl->tpl_vars['CapacityFilter']->value;?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>
"/>
                    <span class="searchclear glyphicon glyphicon-remove-circle" ref="filterCapacity"></span>
                </div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="filterRequiresApproval" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>
</label>
                    <select id="filterRequiresApproval" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl);?>
 title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>
">
                        <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>
</option>
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['RequiresApprovalFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="filterAutoAssign" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>
</label>
                    <select id="filterAutoAssign" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
 title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>
">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>
</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['AutoPermissionFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
                    <label for="filterAllowMultiDay" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>
</label>
                    <select id="filterAllowMultiDay" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl);?>
 title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>
">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>
</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['AllowMultiDayFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="clearfix"></div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AttributeFilters']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'idPrefix'=>"search",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'searchmode'=>true,'class'=>"customAttribute filter-customAttribute".((string)$_smarty_tpl->tpl_vars['attribute']->value->Id())." ".((string)$_smarty_tpl->tpl_vars['groupClass']->value)),$_smarty_tpl);?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


		</div>
		<div class="panel-footer">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['filter_button'][0][0]->FilterButton(array('id'=>"filter",'class'=>"btn-sm"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0][0]->ResetButton(array('id'=>"clearFilter",'class'=>"btn-sm"),$_smarty_tpl);?>

		</div>
        </form>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value,'showCount'=>true),$_smarty_tpl);?>


	<div id="globalError" class="error no-show"></div>

	<div class="panel panel-default admin-panel" id="list-resources-panel">
		<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Resources"),$_smarty_tpl);?>

			<a href="#" class="add-link add-resource pull-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddResource"),$_smarty_tpl);?>

				<span class="fa fa-plus-circle icon add"></span>
			</a>
		</div>
		<div class="panel-body no-padding" id="resourceList">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['resource']->value->GetResourceId());
?>
				<div class="resourceDetails" data-resourceId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
					<div class="col-xs-12 col-sm-5">
						<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>

						<div class="col-sm-3 col-xs-6 resourceImage">
							<div class="margin-bottom-25">
								<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasImage()) {?>
								<div class="owl-carousel owl-theme">
									<div class="item">
										<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0][0]->GetResourceImage(array('image'=>$_smarty_tpl->tpl_vars['resource']->value->GetImage()),$_smarty_tpl);?>
" alt="Resource Image" class="image"/>
									</div>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource']->value->GetImages(), 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
										<div class="item">
											<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0][0]->GetResourceImage(array('image'=>$_smarty_tpl->tpl_vars['image']->value),$_smarty_tpl);?>
" alt="Resource Image" class="image"/>
										</div>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</div>
									<br/>
									<a class="update imageButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Change'),$_smarty_tpl);?>
</a>
								<?php } else { ?>
									<div class="noImage"><span class="fa fa-image"></span></div>
									<a class="update imageButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddImage'),$_smarty_tpl);?>
</a>
								<?php }?>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceColor'),$_smarty_tpl);?>

								<input class="resourceColorPicker" type="color"
									   value='<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {
echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();
} else { ?>#ffffff<?php }?>'
									   alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceColor'),$_smarty_tpl);?>
"
									   title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceColor'),$_smarty_tpl);?>
"/>
								<a href="#" class="update clearColor"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Remove'),$_smarty_tpl);?>
</a>
							</div>
						</div>
						<div class="col-sm-9 col-xs-6">
							<div>
							<span class="title resourceName" data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
								  data-name="<?php echo FormKeys::RESOURCE_NAME;?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</span>
								<a class="update renameButton" href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
</span>
                                    <i
											class="fa fa-pencil-square-o"></i></a> |
								<a class="update copyButton" href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Copy'),$_smarty_tpl);?>
">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Copy'),$_smarty_tpl);?>
</span>
                                    <i
											class="fa fa-copy"></i></a> |
								<a class="update deleteButton" href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</span>
                                    <i class="fa fa-trash icon delete"></i>
                                </a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>

								<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsAvailable()) {?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status.png"),$_smarty_tpl);?>

									<a class="update changeStatus"
									   href="#" rel="popover"
									   data-popover-content="#statusDialog"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['resource']->value->IsUnavailable()) {?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-away.png"),$_smarty_tpl);?>

									<a class="update changeStatus"
									   href="#" rel="popover"
									   data-popover-content="#statusDialog"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unavailable'),$_smarty_tpl);?>
</a>
								<?php } else { ?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-busy.png"),$_smarty_tpl);?>

									<a class="update changeStatus"
									   href="#" rel="popover"
									   data-popover-content="#statusDialog"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Hidden'),$_smarty_tpl);?>
</a>
								<?php }?>
								<?php if (array_key_exists($_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId(),$_smarty_tpl->tpl_vars['StatusReasons']->value)) {?>
									<span class="statusReason"><?php echo $_smarty_tpl->tpl_vars['StatusReasons']->value[$_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId()]->Description();?>
</span>
								<?php }?>
							</div>

							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>

								<span class="propertyValue scheduleName"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetScheduleId();?>
"
									  data-name="<?php echo FormKeys::SCHEDULE_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['Schedules']->value[$_smarty_tpl->tpl_vars['resource']->value->GetScheduleId()];?>
</span>
								<a class="update changeScheduleButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Move'),$_smarty_tpl);?>
</a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>

								<span class="propertyValue resourceTypeName"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_TYPE_ID;?>
">
									<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasResourceType()) {?>
										<?php echo $_smarty_tpl->tpl_vars['ResourceTypes']->value[$_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId()]->Name();?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResourceTypeLabel'),$_smarty_tpl);?>

									<?php }?>
								</span>
								<a class="update changeResourceType" href="#">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</span>
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>

								<span class="propertyValue sortOrderValue"
									  data-type="number" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-name="<?php echo FormKeys::RESOURCE_SORT_ORDER;?>
">
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['resource']->value->GetSortOrder())===null||$tmp==='' ? "0" : $tmp);?>

							</span>
								<a class="update changeSortOrder" href="#">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>
</span>
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>

								<span class="propertyValue locationValue"
									  data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetLocation();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_LOCATION;?>
">
							<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasLocation()) {?>
								<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetLocation();?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoLocationLabel'),$_smarty_tpl);?>

							<?php }?>
							</span>
								<a class="update changeLocation" href="#">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>
</span>
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>

								<span class="propertyValue contactValue"
									  data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetContact();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_CONTACT;?>
">
							<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasContact()) {?>
								<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetContact();?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoContactLabel'),$_smarty_tpl);?>

							<?php }?>
							</span>
								<a class="update changeContact" href="#">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>
</span>
                                    <span class="fa fa-pencil-square-o"></span></a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
 <a class="update changeDescription" href="#">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
</span>
                                    <span
											class="fa fa-pencil-square-o"></span></a>
								<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasDescription()) {?>
									<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['resource']->value->GetDescription());
?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('description', '');
?>
								<?php }?>
								<div class="descriptionValue" data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-name="<?php echo FormKeys::RESOURCE_DESCRIPTION;?>
"><?php if ($_smarty_tpl->tpl_vars['resource']->value->HasDescription()) {
echo $_smarty_tpl->tpl_vars['description']->value;
} else {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);
}?></div>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
 <a class="update changeNotes" href="#">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
</span>
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>
								<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasNotes()) {?>
									<?php $_smarty_tpl->_assignInScope('notes', $_smarty_tpl->tpl_vars['resource']->value->GetNotes());
?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('notes', '');
?>
								<?php }?>
								<div class="notesValue" data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notes']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-name="<?php echo FormKeys::RESOURCE_NOTES;?>
"><?php if ($_smarty_tpl->tpl_vars['resource']->value->HasNotes()) {
echo $_smarty_tpl->tpl_vars['notes']->value;
} else {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoNotesLabel'),$_smarty_tpl);
}?></div>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>

								<span class="propertyValue resourceAdminValue"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_ADMIN_GROUP_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['GroupLookup']->value[$_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId()]->Name;?>
</span>
								<?php if (count($_smarty_tpl->tpl_vars['AdminGroups']->value) > 0) {?>
									<a class="update changeResourceAdmin" href="#">
                                        <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>
</span>
                                        <span class="fa fa-pencil-square-o"></span></a>
								<?php }?>
							</div>
							<div>
								<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageResourcesActions::ActionPrintQR;?>
&rid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
								   target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PrintQRCode'),$_smarty_tpl);?>
 <i class="fa fa-qrcode"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-7">
						<div class="col-sm-6 col-xs-12">
							<h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</h5>
							<a href="#" class="inline update changeDuration">
                                <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</span>
                                <span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="durationPlaceHolder">
								<?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_duration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>

							</div>

                            <?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
                               <div>
                                    <h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</h5>
                                    <a href="#" class="inline update changeCredits">
                                        <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</span>
                                        <span class="fa fa-pencil-square-o"></span>
                                    </a>
                                    <div class="creditsPlaceHolder">
                                        <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_credits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>

                                    </div>
                               </div>
                            <?php }?>

                            <div>
                                <h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Capacity'),$_smarty_tpl);?>
</h5>
                                <a href="#" class="inline update changeCapacity">
                                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Capacity'),$_smarty_tpl);?>
</span>
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>

                                <div class="capacityPlaceHolder">
                                    <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_capacity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>

                                </div>
                            </div>
						</div>

						<div class="col-sm-6 col-xs-12">
							<h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Access'),$_smarty_tpl);?>
</h5>
							<a href="#" class="inline update changeAccess">
                                <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Access'),$_smarty_tpl);?>
</span>
                                <span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="accessPlaceHolder">
								<?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_access.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>

							</div>
						</div>

						<div class="col-sm-6 col-xs-12">
							<h5><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Permissions'),$_smarty_tpl);?>
</h5>
							<a href="#" class="update changeUserPermission"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Users'),$_smarty_tpl);?>
</a> |
							<a href="#" class="update changeGroupPermissions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>
</a>
						</div>

						<div class="col-sm-6 col-xs-12">
							<h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroups'),$_smarty_tpl);?>
</h5>
							<a href="#" class="inline update changeResourceGroups">
                                <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroups'),$_smarty_tpl);?>
</span>
                                <span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="resourceGroupsPlaceHolder">
								<?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_groups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>

							</div>
                            <div class="clearfix">&nbsp;</div>
						</div>

                        <div class="col-sm-6 col-xs-12">
                            <h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Public'),$_smarty_tpl);?>
</h5>
                            <div class="publicSettingsPlaceHolder">
                                <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>

                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">&nbsp;</div>

					</div>

					<div class="clearfix"></div>
					<div class="customAttributes">
						<?php if (count($_smarty_tpl->tpl_vars['AttributeList']->value) > 0) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AttributeList']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
								<?php $_smarty_tpl->_subTemplateRender("file:Admin/InlineAttributeEdit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'value'=>$_smarty_tpl->tpl_vars['resource']->value->GetAttributeValue($_smarty_tpl->tpl_vars['attribute']->value->Id())), 0, true);
?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<?php }?>
					</div>
					<div class="clearfix"></div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


	<div id="add-resource-dialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="addResourceModalLabel"
		 aria-hidden="true">
		<form id="addResourceForm" class="form" role="form" method="post"
			  ajaxAction="<?php echo ManageResourcesActions::ActionAdd;?>
"  enctype="multipart/form-data">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addResourceModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddNewResource'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div id="addResourceResults" class="alert alert-danger no-show"></div>

						<div class="form-group has-feedback">
							<label for="resourceName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</label>
							<input type="text" class="form-control required" maxlength="85" id="resourceName"
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NAME'),$_smarty_tpl);?>
 />
							<i class="glyphicon glyphicon-asterisk form-control-feedback"
							   data-bv-icon-for="resourceName"></i>

						</div>
						<div class="form-group">
							<label for="scheduleId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
</label>
							<select class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 id="scheduleId">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'scheduleName', false, 'scheduleId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleId']->value => $_smarty_tpl->tpl_vars['scheduleName']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['scheduleName']->value;?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</select>
						</div>
						<div class="form-group">
							<label for="permissions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissions'),$_smarty_tpl);?>
</label>
							<select class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
 id="permissions">
								<option value="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourcePermissionAutoGranted"),$_smarty_tpl);?>
</option>
								<option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourcePermissionNotAutoGranted"),$_smarty_tpl);?>
</option>
							</select>
						</div>
						<div class="form-group">
							<label for="resourceAdminGroupId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>
</label>
							<select class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ADMIN_GROUP_ID'),$_smarty_tpl);?>

									id="resourceAdminGroupId">
								<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminGroups']->value, 'adminGroup');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</select>
						</div>
                        <label for="resourceImageAdd"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Image'),$_smarty_tpl);?>
</label>
                        <div class="dropzone" id="addResourceImage">
                            <div>
                                <span class="fa fa-image fa-3x"></span><br/>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChooseOrDropFile'),$_smarty_tpl);?>

                            </div>
                            <input id="resourceImageAdd" type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl);?>

                                   accept="image/*;capture=camera" />
                        </div>
                        <div class="note">.gif, .jpg, or .png</div>
                    </div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<input type="hidden" id="activeId" value=""/>

	<div id="imageDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
		 aria-hidden="true">
		<form id="imageForm" method="post" enctype="multipart/form-data" ajaxAction="<?php echo ManageResourcesActions::ActionChangeImage;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="imageModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceImages'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">

						<div id="resource-images">

						</div>
						<div class="clearfix">&nbsp;</div>

                        <label for="resourceImage" class="off-screen no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Image'),$_smarty_tpl);?>
</label>
                        <div class="dropzone" id="changeResourceImage">
                            <div class="dropzone-empty">
                                <span class="fa fa-image fa-3x"></span><br/>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChooseOrDropFile'),$_smarty_tpl);?>

                            </div>
							<div class="dropzone-preview"></div>
                            <input id="resourceImage" type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl);?>

                                   accept="image/*;capture=camera" />
                        </div>

						<div class="note">.gif, .jpg, .png</div>
					</div>

					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array('key'=>'Done'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<form id="removeImageForm" method="post"  ajaxAction="<?php echo ManageResourcesActions::ActionRemoveImage;?>
">
		<input type="hidden" id="removeImageName" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl);?>
 />
	</form>

	<form id="defaultImageForm" method="post"  ajaxAction="<?php echo ManageResourcesActions::ActionDefaultImage;?>
">
		<input type="hidden" id="defaultImageName" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl);?>
 />
	</form>

	<div id="copyDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="copyModalLabel"
		 aria-hidden="true">
		<form id="copyForm" method="post" enctype="multipart/form-data"
			  ajaxAction="<?php echo ManageResourcesActions::ActionCopyResource;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="copyModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Copy'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label for="copyResourceName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</label>
							<input type="text" class="form-control required" maxlength="85" id="copyResourceName"
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NAME'),$_smarty_tpl);?>
 />
							<i class="glyphicon glyphicon-asterisk form-control-feedback"
							   data-bv-icon-for="copyResourceName"></i>

						</div>
					</div>

					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="durationDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="durationModalLabel"
		 aria-hidden="true">
		<form id="durationForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeDuration;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="durationModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editMinDuration">
							<div class="checkbox">
								<input type="checkbox" id="noMinimumDuration" class="noMinimumDuration"
									   data-related-inputs="#minDurationInputs"/>
								<label for="noMinimumDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMinDuration", "txtMinDuration", null);
?>

								<input type='number' size='3' id='minDurationDays' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' size='2' id='minDurationHours' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' size='2' id='minDurationMinutes'
									   class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='minDuration'
									   class='interval minDuration' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_DURATION'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<div id='minDurationInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['txtMinDuration']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editMaxDuration">
							<div class="checkbox">
								<input type="checkbox" id="noMaximumDuration" data-related-inputs="#maxDurationInputs"/>
								<label for="noMaximumDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMaxDuration", "txtMaxDuration", null);
?>

								<input type='number' id='maxDurationDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='maxDurationHours' size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='maxDurationMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='maxDuration' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_DURATION'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<div id='maxDurationInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['txtMaxDuration']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editBuffer">
							<div class="checkbox">
								<input type="checkbox" id="noBufferTime" data-related-inputs="#bufferInputs"/>
								<label for="noBufferTime"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTimeNone'),$_smarty_tpl);?>
</label>
							</div>

							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtBufferTime", "txtBufferTime", null);
?>

								<input type='number' id='bufferTimeDays'
									   size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='bufferTimeHours'
									   size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='bufferTimeMinutes'
									   size='2' class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='bufferTime'
									   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BUFFER_TIME'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<div id='bufferInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTime','args'=>$_smarty_tpl->tpl_vars['txtBufferTime']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editMultiDay">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl);?>
 id="allowMultiDay"/>
								<label for="allowMultiDay"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>
</label>
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="capacityDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="capacityModalLabel"
		 aria-hidden="true">
		<form id="capacityForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeCapacity;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="capacityModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Capacity'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editCapacity">
							<div class="checkbox">
								<input type="checkbox" id="unlimitedCapacity" class="unlimitedCapacity"
									   data-related-inputs="#maxCapacityInputs"/>
								<label for="unlimitedCapacity"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>
</label>
							</div>
							<div id='maxCapacityInputs'>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMaxCapacity", "txtMaxCapacity", null);
?>

                                    <label for='maxCapacity' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Capacity'),$_smarty_tpl);?>
</label>
									<input type='number' id='maxCapacity' class='form-control inline mid-number' min='0'
										   max='9999' size='5' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['txtMaxCapacity']->value),$_smarty_tpl);?>

							</div>
						</div>
					</div>

					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="accessDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="accessModalLabel"
		 aria-hidden="true">
		<form id="accessForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeAccess;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="accessModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Access'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editStartNoticeAdd">
							<div class="checkbox">
								<input type="checkbox" id="noStartNoticeAdd" class="noStartNoticeAdd"
									   data-related-inputs="#startNoticeInputsAdd"/>
								<label for="noStartNoticeAdd"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeAdd", "txtStartNoticeAdd", null);
?>

								<input type='number' id='startNoticeAddDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='startNoticeAddHours' size='2' class='hours form-control inline'
									   maxlength='2' max='99' min='0'
									   title='Hours' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='startNoticeAddMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='startNoticeAdd' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_ADD'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<div id='startNoticeInputsAdd'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeAdd']->value),$_smarty_tpl);?>

							</div>
						</div>

                        <div class="editStartNoticeUpdate">
							<div class="checkbox">
								<input type="checkbox" id="noStartNoticeUpdate" class="noStartNoticeUpdate"
									   data-related-inputs="#startNoticeInputsUpdate"/>
								<label for="noStartNoticeUpdate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNoneUpdate'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeUpdate", "txtStartNoticeUpdate", null);
?>

								<input type='number' id='startNoticeUpdateDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='startNoticeUpdateHours' size='2' class='hours form-control inline'
									   maxlength='2' max='99' min='0'
									   title='Hours' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='startNoticeUpdateMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='startNoticeUpdate' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_UPDATE'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<div id='startNoticeInputsUpdate'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeUpdate','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeUpdate']->value),$_smarty_tpl);?>

							</div>
						</div>

                        <div class="editStartNoticeDelete">
							<div class="checkbox">
								<input type="checkbox" id="noStartNoticeDelete" class="noStartNoticeDelete"
									   data-related-inputs="#startNoticeInputsDelete"/>
								<label for="noStartNoticeDelete"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNoneDelete'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeDelete", "txtStartNoticeDelete", null);
?>

								<input type='number' id='startNoticeDeleteDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='startNoticeDeleteHours' size='2' class='hours form-control inline'
									   maxlength='2' max='99' min='0'
									   title='Hours' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='startNoticeDeleteMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='startNoticeDelete' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_DELETE'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<div id='startNoticeInputsDelete'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeDelete','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeDelete']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editEndNotice">
							<div class="checkbox">
								<input type="checkbox" id="noEndNotice" data-related-inputs="#endNoticeInputs"/>
								<label for="noEndNotice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtEndNotice", "txtEndNotice", null);
?>

								<input type='number' id='endNoticeDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='endNoticeHours' size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='endNoticeMinutes' size='2' class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='endNotice' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_NOTICE'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<div id='endNoticeInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['txtEndNotice']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editRequiresApproval">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl);?>
 id="requiresApproval"/>
								<label for="requiresApproval"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>
</label>
							</div>
						</div>

						<div class="editAutoAssign">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
 id="autoAssign" value="1"/>
								<label for="autoAssign"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>
</label>
							</div>
						</div>

						<div class="no-show" id="autoAssignRemoveAllPermissions">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN_CLEAR'),$_smarty_tpl);?>

									   id="autoAssignRemoveAllPermissionsChk" value="1"/>
								<label for="autoAssignRemoveAllPermissionsChk"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RemoveExistingPermissions'),$_smarty_tpl);?>
</label>
							</div>
						</div>

						<div class="editCheckin">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ENABLE_CHECK_IN'),$_smarty_tpl);?>
 id="enableCheckIn"/>
								<label for="enableCheckIn"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresCheckInNotification'),$_smarty_tpl);?>
</label>
							</div>
							<div class="no-show" id="autoReleaseMinutesDiv">
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtAutoRelease", "txtAutoRelease", null);
?>

                                    <label for='autoReleaseMinutes' class='no-show'>Auto Release Minutes</label>
									<input type='number' max='99' min='0' id='autoReleaseMinutes'
										   class='minutes form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_RELEASE_MINUTES'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['txtAutoRelease']->value),$_smarty_tpl);?>

							</div>
						</div>
					</div>

					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="statusDialog" class="hide">
		<form class="statusForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeStatus;?>
">
			<div class="control-group form-group">
				<div class="form-group">
					<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>

						<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl);?>
 class="statusId form-control">
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
					</label>
				</div>

				<div class="form-group no-show newStatusReason">
					<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReasonText'),$_smarty_tpl);?>

						<a href="#" class="pull-right addStatusReason">
                            <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReasonText'),$_smarty_tpl);?>
</span>
                            <span class="addStatusIcon fa fa-list-alt icon add"></span>
                        </a>
						<input type="text"
							   class="form-control resourceStatusReason" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_REASON'),$_smarty_tpl);?>
 />
					</label>
				</div>
				<div class="form-group existingStatusReason">
					<label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>

						<a href="#" class="pull-right addStatusReason">
                            <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>
</span>
                            <span class="addStatusIcon fa fa-plus icon add"></span>
                        </a>
						<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl);?>
 class="form-control reasonId"></select>
					</label>
				</div>

			</div>
			<div class="editable-buttons">
				<button type="button" class="btn btn-primary btn-sm editable-submit save">
                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Save'),$_smarty_tpl);?>
</span>
                    <i class="glyphicon glyphicon-ok"></i>
                </button>
				<button type="button" class="btn btn-default btn-sm editable-cancel">
                    <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</span>
                    <i class="glyphicon glyphicon-remove"></i>
                </button>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

			</div>
		</form>
	</div>

	<div id="deletePrompt" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteResourceDialogLabel"
		 aria-hidden="true">
		<form id="deleteForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionDelete;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteResourceDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</div>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarning'),$_smarty_tpl);?>
:
							<ul>
								<li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningReservations'),$_smarty_tpl);?>
</li>
								<li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningPermissions'),$_smarty_tpl);?>
</li>
							</ul>

							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningReassign'),$_smarty_tpl);?>

						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="bulkUpdateDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="bulkUpdateLabel"
		 aria-hidden="true">
		<form id="bulkUpdateForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionBulkUpdate;?>
"
			  class="form-vertical"
			  role="form">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="bulkUpdateLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BulkResourceUpdate'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div id="bulkUpdateErrors" class="error no-show">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"bulkAttributeValidator",'key'=>''),$_smarty_tpl);?>

						</div>
						<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Select'),$_smarty_tpl);?>

							<a href="#" id="checkAllResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
</a> |
							<a href="#" id="checkNoResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</a>
						</div>
						<div id="bulkUpdateList"></div>
						<div>
							<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Common'),$_smarty_tpl);?>
</div>
							<div class="form-group">
								<label for="bulkEditSchedule" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoveToSchedule'),$_smarty_tpl);?>

									:</label>
								<select id="bulkEditSchedule" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
>
									<option value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unchanged'),$_smarty_tpl);?>
</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'scheduleName', false, 'scheduleId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleId']->value => $_smarty_tpl->tpl_vars['scheduleName']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['scheduleName']->value;?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditResourceType" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>

									:</label>
								<select id="bulkEditResourceType" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
>
									<option value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unchanged'),$_smarty_tpl);?>
</option>
									<option value="">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
 --</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypes']->value, 'resourceType', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['resourceType']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['resourceType']->value->Name();?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditLocation" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>
:</label>
								<input id="bulkEditLocation" type="text" class="form-control"
									   maxlength="85" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_LOCATION'),$_smarty_tpl);?>
 />
							</div>
							<div class="form-group">
								<label for="bulkEditContact" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>
:</label>
								<input id="bulkEditContact" type="text" class="form-control"
									   maxlength="85" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_CONTACT'),$_smarty_tpl);?>
 />
							</div>
							<div class="form-group">
								<label for="bulkEditAdminGroupId"
									   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>
:</label>
								<select id="bulkEditAdminGroupId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ADMIN_GROUP_ID'),$_smarty_tpl);?>

										class="form-control">
									<option value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unchanged'),$_smarty_tpl);?>
</option>
									<option value="">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
 --</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminGroups']->value, 'adminGroup');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditStatusId" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>
:</label>
								<select id="bulkEditStatusId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl);?>
 class="form-control">
									<option value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unchanged'),$_smarty_tpl);?>
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
							<div class="form-group">
								<label for="bulkEditStatusReasonId" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>

									:</label>
								<select id="bulkEditStatusReasonId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl);?>

										class="form-control">
								</select>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="bulkEditDescription" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>

									:</label>
								<textarea id="bulkEditDescription"
										  class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_DESCRIPTION'),$_smarty_tpl);?>
></textarea>
							</div>
							<div class="form-group">
								<label for="bulkEditNotes" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
:</label>
								<textarea id="bulkEditNotes"
										  class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NOTES'),$_smarty_tpl);?>
></textarea>
							</div>
						</div>

                        <div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Capacity'),$_smarty_tpl);?>
</div>
                        <div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input type="checkbox" id="bulkEditUnlimitedCapacity" class="unlimitedCapacity"
                                           data-related-inputs="#bulkEditMaxCapacityInputs" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS_UNLIMITED'),$_smarty_tpl);?>
/>
                                    <label for="bulkEditUnlimitedCapacity"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>
</label>
                                </div>
                                <div id='bulkEditMaxCapacityInputs'>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtBulkEditMaxCapacity", "txtBulkEditMaxCapacity", null);
?>

                                        <label for='bulkEditMaxCapacity' class='no-show'>Capacity</label>
                                        <input type='number' id='bulkEditMaxCapacity' class='form-control inline mid-number' min='0'
                                               max='9999' size='5' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>
 />
                                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['txtBulkEditMaxCapacity']->value),$_smarty_tpl);?>

                                </div>
                            </div>
                        </div>

						<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</div>
						<div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoMinimumDuration"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_DURATION_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkMinDuration"/>
									<label for="bulkEditNoMinimumDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>
</label>
								</div>

								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMinDuration", "txtMinDuration", null);
?>

                                    <label for='bulkEditMinDurationDays' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditMinDurationHours' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditMinDurationMinutes' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</label>
									<input type='number' id='bulkEditMinDurationDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditMinDurationHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditMinDurationMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditMinDuration'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_DURATION'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<div id="bulkMinDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['txtMinDuration']->value),$_smarty_tpl);?>
</div>
							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoMaximumDuration"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_DURATION_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkMaxDuration"/>
									<label for="bulkEditNoMaximumDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>
</label>
								</div>

								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMaxDuration", "txtMaxDuration", null);
?>

                                    <label for='bulkEditMaxDurationDays' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditMaxDurationHours' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditMaxDurationMinutes' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</label>
									<input type='number' id='bulkEditMaxDurationDays' size='3'
										   class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditMaxDurationHours' size='2'
										   class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditMaxDurationMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditMaxDuration'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_DURATION'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<div id="bulkMaxDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['txtMaxDuration']->value),$_smarty_tpl);?>
</div>

							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoBufferTime"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BUFFER_TIME_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkBufferTime"/>
									<label for="bulkEditNoBufferTime"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTimeNone'),$_smarty_tpl);?>
</label>
								</div>

								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtBufferTime", "txtBufferTime", null);
?>

                                    <label for='bulkEditBufferTimeDays' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditBufferTimeHours' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditBufferTimeMinutes' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</label>
									<input type='number' id='bulkEditBufferTimeDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditBufferTimeHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditBufferTimeMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditBufferTime'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BUFFER_TIME'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<div id="bulkBufferTime">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTime','args'=>$_smarty_tpl->tpl_vars['txtBufferTime']->value),$_smarty_tpl);?>

								</div>

							</div>
						</div>

						<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Access'),$_smarty_tpl);?>
</div>
						<div>

							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoStartNoticeAdd"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_NONE_ADD'),$_smarty_tpl);?>

										   data-related-inputs="#bulkStartNoticeInputsAdd"/>
									<label for="bulkEditNoStartNoticeAdd"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>
</label>
								</div>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeAdd", "txtStartNoticeAdd", null);
?>

                                    <label for='bulkEditStartNoticeAddDays' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditStartNoticeAddHours' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditStartNoticeAddMinutes' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</label>
									<input type='number' id='bulkEditStartNoticeAddDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditStartNoticeAddHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditStartNoticeAddMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditStartNoticeAdd'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_ADD'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<div id='bulkStartNoticeInputsAdd'>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeAdd']->value),$_smarty_tpl);?>

								</div>
							</div>

                            <div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoStartNoticeUpdate"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_NONE_UPDATE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkStartNoticeInputsUpdate"/>
									<label for="bulkEditNoStartNoticeUpdate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNoneUpdate'),$_smarty_tpl);?>
</label>
								</div>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeUpdate", "txtStartNoticeUpdate", null);
?>

                                    <label for='bulkEditStartNoticeUpdateDays' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditStartNoticeUpdateHours' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditStartNoticeUpdateMinutes' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</label>
									<input type='number' id='bulkEditStartNoticeUpdateDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditStartNoticeUpdateHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditStartNoticeUpdateMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditStartNoticeUpdate'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_UPDATE'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<div id='bulkStartNoticeInputsUpdate'>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeUpdate','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeUpdate']->value),$_smarty_tpl);?>

								</div>
							</div>

                            <div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoStartNoticeDelete"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_NONE_DELETE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkStartNoticeInputsDelete"/>
									<label for="bulkEditNoStartNoticeDelete"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNoneDelete'),$_smarty_tpl);?>
</label>
								</div>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeDelete", "txtStartNoticeDelete", null);
?>

                                    <label for='bulkEditStartNoticeDeleteDays' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditStartNoticeDeleteHours' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditStartNoticeDeleteMinutes' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</label>
									<input type='number' id='bulkEditStartNoticeDeleteDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditStartNoticeDeleteHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='number' id='bulkEditStartNoticeDeleteMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditStartNoticeDelete'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_DELETE'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<div id='bulkStartNoticeInputsDelete'>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeDelete','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeDelete']->value),$_smarty_tpl);?>

								</div>
							</div>

							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoEndNotice"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_NOTICE_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkEndNotice"/>
									<label for="bulkEditNoEndNotice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>
</label>
								</div>


								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtEndNotice", "txtEndNotice", null);
?>

                                    <label for='bulkEditEndNoticeDays' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditEndNoticeHours' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</label>
                                    <label for='bulkEditEndNoticeMinutes' class='no-show'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</label>
									<input type='text' id='bulkEditEndNoticeDays' size='3' class='days form-control inline'
										   maxlength='3' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditEndNoticeHours' size='2' class='hours form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditEndNoticeMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditEndNotice'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_NOTICE'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<div id="bulkEndNotice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['txtEndNotice']->value),$_smarty_tpl);?>
</div>
							</div>
						</div>

						<div class="form-group">
							<label for="bulkEditAllowMultiday"
								   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>
</label>
							<select id="bulkEditAllowMultiday" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditRequiresApproval"
								   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>
</label>
							<select id="bulkEditRequiresApproval"
									class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditAutoAssign"
								   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>
</label>
							<select id="bulkEditAutoAssign" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditEnableCheckIn" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresCheckInNotification'),$_smarty_tpl);?>
</label>
							<select id="bulkEditEnableCheckIn" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ENABLE_CHECK_IN'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
							<div class="no-show" id="bulkUpdateAutoReleaseMinutesDiv">
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "bulkEditTxtAutoRelease", "bulkEditTxtAutoRelease", null);
?>

                                    <label for='bulkEditAutoReleaseMinutes' class='no-show'>Auto Release minutes</label>
									<input type='number' max='99' min='0' id='bulkEditAutoReleaseMinutes'
										   class='minutes form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_RELEASE_MINUTES'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['bulkEditTxtAutoRelease']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="form-group">
							<label for="bulkEditAllowSubscriptions"
								   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</label>
							<select id="bulkEditAllowSubscriptions"
									class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_CALENDAR_SUBSCRIPTIONS'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
							<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</div>
							<div class="form-group">
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "bulkEditCreditsPerSLot", "bulkEditCreditsPerSLot", null);
?>

                                    <label for='bulkEditCreditsPerSlot' class='no-show'>Credits Per Slot</label>
                                    <input type='number' min='0' step='1' id='bulkEditCreditsPerSlot'
										   class='credits form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CREDITS'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['bulkEditCreditsPerSLot']->value),$_smarty_tpl);?>

							</div>
							<div class="form-group">
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "bulkEditPeakCreditsPerSlot", "bulkEditPeakCreditsPerSlot", null);
?>

                                    <label for='bulkEditPeakCreditsPerSlot' class='no-show'>Peak Credits Per Slot</label>
                                    <input type='number' min='0' step='1' id='bulkEditPeakCreditsPerSlot'
										   class='credits form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_CREDITS'),$_smarty_tpl);?>
 />
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PeakCreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['bulkEditPeakCreditsPerSlot']->value),$_smarty_tpl);?>

							</div>
						<?php }?>

						<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalAttributes'),$_smarty_tpl);?>
</div>
						<div>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AttributeFilters']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
								<?php if (!$_smarty_tpl->tpl_vars['attribute']->value->UniquePerEntity()) {?>
									<div class="customAttribute">
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'searchmode'=>true),$_smarty_tpl);?>

									</div>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

		</form>
	</div>

    <div id="bulkDeleteDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="bulkDeleteLabel"
         aria-hidden="true">
        <form id="bulkDeleteForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionBulkDelete;?>
"
              class="form-vertical"
              role="form">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="bulkDeleteLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BulkResourceDelete'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</div>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarning'),$_smarty_tpl);?>
:
                            <ul>
                                <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningReservations'),$_smarty_tpl);?>
</li>
                                <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningPermissions'),$_smarty_tpl);?>
</li>
                            </ul>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningReassign'),$_smarty_tpl);?>

                        </div>

                        <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Select'),$_smarty_tpl);?>

                            <a href="#" id="checkAllDeleteResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
</a> |
                            <a href="#" id="checkNoDeleteResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</a>
                        </div>
                        <div id="bulkDeleteList"></div>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

        </form>
    </div>

	<div id="userDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="userPermissionDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="userPermissionDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Users'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body scrollable-modal-content">
					<div class="form-group">
						<label for="userSearch"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddUser'),$_smarty_tpl);?>
</label>
                        <a href="#" id="browseUsers"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Browse'),$_smarty_tpl);?>
</a>
						<input type="text" id="userSearch" class="form-control" size="60"/>
					</div>
					<div id="resourceUserList"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="allUsers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="browseUsersDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="browseUsersDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllUsers'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body scrollable-modal-content">
					<div id="allUsersList"></div>
				</div>
			</div>
		</div>
	</div>

	<form id="changeUserForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeUserPermission;?>
">
		<input type="hidden" id="changeUserId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 />
        <input type="hidden" id="changeUserType" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PERMISSION_TYPE'),$_smarty_tpl);?>
 />
	</form>

	<div id="groupDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="browseGroupsDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="browseGroupsDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllGroups'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body scrollable-modal-content">
					<div class="form-group">
						<label for="groupSearch"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddGroup'),$_smarty_tpl);?>
</label>
                        <a href="#" id="browseGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllGroups'),$_smarty_tpl);?>
</a>
						<input type="text" id="groupSearch" class="form-control" size="60"/>
					</div>

					<div id="resourceGroupList"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="allGroups" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="groupPermissionDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="groupPermissionDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body scrollable-modal-content">
					<div id="allGroupsList"></div>
				</div>
			</div>
		</div>
	</div>

    <form id="changeGroupForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeGroupPermission;?>
">
		<input type="hidden" id="changeGroupId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_ID'),$_smarty_tpl);?>
 />
		<input type="hidden" id="changeGroupType" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PERMISSION_TYPE'),$_smarty_tpl);?>
 />
	</form>

	<div class="modal fade" id="resourceGroupDialog" tabindex="-1" role="dialog"
		 aria-labelledby="resourceGroupsModalLabel"
		 aria-hidden="true">
		<form id="resourceGroupForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeResourceGroups;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="resourceGroupsModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroups'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body scrollable-modal-content">
						<div id="resourceGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<form id="colorForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeColor;?>
">
		<input type="hidden" id="reservationColor" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_COLOR'),$_smarty_tpl);?>
 />
	</form>

	<div id="creditsDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="creditsModalLabel"
		 aria-hidden="true">
		<form id="creditsForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeCredits;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="creditsModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "creditsPerSLot", "creditsPerSLot", null);
?>

                                <label for='creditsPerSlot' class='no-show'>Credits Per Slot</label>
								<input type='number' min='0' step='1' id='creditsPerSlot'
									   class='credits form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CREDITS'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['creditsPerSLot']->value),$_smarty_tpl);?>

						</div>

						<div>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "peakCreditsPerSlot", "peakCreditsPerSlot", null);
?>

                                <label for='peakCreditsPerSlot' class='no-show'>Peak Credits Per Slot</label>
                                <input type='number' min='0' step='1' id='peakCreditsPerSlot'
									   class='credits form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_CREDITS'),$_smarty_tpl);?>
 />
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PeakCreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['peakCreditsPerSlot']->value),$_smarty_tpl);?>

						</div>
					</div>

					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="importDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel"
         aria-hidden="true">
        <form id="importForm" class="form" role="form" method="post" enctype="multipart/form-data"
              ajaxAction="<?php echo ManageResourcesActions::ImportResources;?>
">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="importModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Import'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div id="importResults" class="validationSummary alert alert-danger no-show">
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
</a>
                        </div>
                        <div class="margin-bottom-25">
                            <label for="resourceImportFile" class="no-show">Resource Import File</label>
                            <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_IMPORT_FILE'),$_smarty_tpl);?>
 id="resourceImportFile" />
                            <div class="checkbox">
                                <input type="checkbox" id="updateOnImport" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'UPDATE_ON_IMPORT'),$_smarty_tpl);?>
/>
                                <label for="updateOnImport"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UpdateResourcesOnImport'),$_smarty_tpl);?>
</label>
                            </div>
                        </div>
                        <div id="importInstructions" class="alert alert-info">
                            <div class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceImportInstructions'),$_smarty_tpl);?>
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

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('InlineEdit'=>true,'Owl'=>true,'Clear'=>true), 0, false);
?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"autocomplete.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/resource.js"),$_smarty_tpl);?>

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

			$('.resourceName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionRename;?>
', validate: function (value) {
					if ($.trim(value) == '')
					{
						return '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiredValue'),$_smarty_tpl);?>
';
					}
				}
			});

			$('.scheduleName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeSchedule;?>
', source: [
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'scheduleName', false, 'scheduleId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleId']->value => $_smarty_tpl->tpl_vars['scheduleName']->value) {
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['scheduleName']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				]
			});

			$('.resourceTypeName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeResourceType;?>
',
				emptytext: '<?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResourceTypeLabel'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo strtr($_prefixVariable1, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
				source: [{
					value: '0', text: '' //'-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
 --'
				},
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypes']->value, 'resourceType', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['resourceType']->value) {
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['resourceType']->value->Name(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				]
			});

			$('.sortOrderValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeSort;?>
', emptytext: '0', min: 0, max: 999
			});

			$('.locationValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeLocation;?>
', emptytext: '<?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoLocationLabel'),$_smarty_tpl);
$_prefixVariable2=ob_get_clean();
echo strtr($_prefixVariable2, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.contactValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeContact;?>
', emptytext: '<?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoContactLabel'),$_smarty_tpl);
$_prefixVariable3=ob_get_clean();
echo strtr($_prefixVariable3, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
}'
			});

			$('.descriptionValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeDescription;?>
', emptytext: '<?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);
$_prefixVariable4=ob_get_clean();
echo strtr($_prefixVariable4, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.notesValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeNotes;?>
', emptytext: '<?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);
$_prefixVariable5=ob_get_clean();
echo strtr($_prefixVariable5, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.resourceAdminValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeAdmin;?>
', emptytext: '<?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);
$_prefixVariable6=ob_get_clean();
echo strtr($_prefixVariable6, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', source: [{
					value: '0', text: ''
				},
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminGroups']->value, 'group', false, 'scheduleId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleId']->value => $_smarty_tpl->tpl_vars['group']->value) {
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['group']->value->Id();?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['group']->value->Name(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				]
			});

			$('.inlineAttribute').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeAttribute;?>
', emptytext: '-'
			});

		}

		$(document).ready(function () {
			setUpPopovers();
			hidePopoversWhenClickAway();
			setUpEditables();

            dropzone($("#addResourceImage"));
            dropzone($("#changeResourceImage"), {
				autoSubmit: true
            });

			var actions = {
				enableSubscription: '<?php echo ManageResourcesActions::ActionEnableSubscription;?>
',
				disableSubscription: '<?php echo ManageResourcesActions::ActionDisableSubscription;?>
'
			};

			var opts = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				actions: actions,
				userAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
				groupAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::Group;?>
",
				permissionsUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				copyText: '<?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Copy'),$_smarty_tpl);
$_prefixVariable7=ob_get_clean();
echo strtr($_prefixVariable7, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			};

			var resourceManagement = new ResourceManagement(opts);

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
			var resource = {
				id: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceId();?>
',
				name: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetName(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				location: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetLocation(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				contact: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetContact(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				description: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetDescription(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				notes: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetNotes(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				autoAssign: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign();?>
',
				requiresApproval: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval();?>
',
				allowMultiday: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAllowMultiday();?>
',
				maxParticipants: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
',
				scheduleId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetScheduleId();?>
',
				minLength: {},
				maxLength: {},
				startNoticeAdd: {},
                startNoticeUpdate: {},
                startNoticeDelete: {},
				endNotice: {},
				bufferTime: {},
				adminGroupId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId();?>
',
				sortOrder: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetSortOrder();?>
',
				resourceTypeId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId();?>
',
				statusId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetStatusId();?>
',
				reasonId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId();?>
',
				allowSubscription: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetIsCalendarSubscriptionAllowed();?>
',
				enableCheckin: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled();?>
',
				autoReleaseMinutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes();?>
',
				credits: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetCreditsPerSlot();?>
',
				peakCredits: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetPeakCreditsPerSlot();?>
'
			};

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinLength()) {?>
			resource.minLength = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Minutes();?>
'
			};
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxLength()) {?>
			resource.maxLength = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Minutes();?>
'
			};
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeAdd()) {?>
			resource.startNoticeAdd = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Minutes();?>
'
			};
			<?php }?>

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeUpdate()) {?>
			resource.startNoticeUpdate = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Minutes();?>
'
			};
			<?php }?>

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeDelete()) {?>
			resource.startNoticeDelete = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Minutes();?>
'
			};
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxNotice()) {?>
			resource.endNotice = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Minutes();?>
'
			};
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasBufferTime()) {?>
			resource.bufferTime = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Minutes();?>
'
			};
			<?php }?>

			resource.image = null;
			<?php if (($_smarty_tpl->tpl_vars['resource']->value->HasImage())) {?>
				resource.image = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0][0]->GetResourceImage(array('image'=>$_smarty_tpl->tpl_vars['resource']->value->GetImage()),$_smarty_tpl);?>
';
			<?php }?>

			resource.images = [];
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource']->value->GetImages(), 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
				resource.images.push('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0][0]->GetResourceImage(array('image'=>$_smarty_tpl->tpl_vars['image']->value),$_smarty_tpl);?>
');
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			resource.resourceGroupIds = [<?php echo join($_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds(),',');?>
];

			resourceManagement.add(resource);
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
			resourceManagement.addStatusReason('<?php echo $_smarty_tpl->tpl_vars['reason']->value->Id();?>
', '<?php echo $_smarty_tpl->tpl_vars['reason']->value->StatusId();?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['reason']->value->Description(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			resourceManagement.init();
			resourceManagement.initializeStatusFilter('<?php echo $_smarty_tpl->tpl_vars['ResourceStatusFilterId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['ResourceStatusReasonFilterId']->value;?>
');
			resourceManagement.addResourceGroups(<?php echo $_smarty_tpl->tpl_vars['ResourceGroups']->value;?>
);

			$('#filter-resources-panel').showHidePanel();

			$(".owl-carousel").owlCarousel({
				items:1
			});
		});

	<?php echo '</script'; ?>
>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
