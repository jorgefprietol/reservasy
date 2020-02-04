<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:18:27
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Attributes/manage_attributes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e30971344ef65_29404994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ed80007176f9ce8060f24dbc34f0f2fac016b81' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Attributes/manage_attributes.tpl',
      1 => 1580159970,
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
function content_5e30971344ef65_29404994 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>'css/admin.css'), 0, false);
?>


<div id="page-manage-attributes" class="admin-page">
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CustomAttributes'),$_smarty_tpl);?>
</h1>

	<div id="customAttributeHeader" class="form-group">

		<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Category'),$_smarty_tpl);?>
:
			<select id="attributeCategory" class="inline form-control">
				<option value="<?php echo CustomAttributeCategory::RESERVATION;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CategoryReservation'),$_smarty_tpl);?>
</option>
				<option value="<?php echo CustomAttributeCategory::USER;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</option>
				<option value="<?php echo CustomAttributeCategory::RESOURCE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</option>
				<option value="<?php echo CustomAttributeCategory::RESOURCE_TYPE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</option>
			</select>
		</label>

		<a href="#" id="addAttributeButton"><span class="fa fa-plus-circle icon add"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddAttribute'),$_smarty_tpl);?>
</a>
	</div>

	<div class="modal fade" id="addAttributeDialog" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="addAttributeForm" ajaxAction="<?php echo ManageAttributesActions::AddAttribute;?>
" method="post">
				<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_CATEGORY'),$_smarty_tpl);?>
  id="addCategory" value=""/>

				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddAttribute'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="attributeType"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Type'),$_smarty_tpl);?>
</label>
							<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_TYPE'),$_smarty_tpl);?>
 id="attributeType" class="form-control">
								<option value="<?php echo CustomAttributeTypes::SINGLE_LINE_TEXTBOX;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::SINGLE_LINE_TEXTBOX]),$_smarty_tpl);?>
</option>
								<option value="<?php echo CustomAttributeTypes::MULTI_LINE_TEXTBOX;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::MULTI_LINE_TEXTBOX]),$_smarty_tpl);?>
</option>
								<option value="<?php echo CustomAttributeTypes::SELECT_LIST;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::SELECT_LIST]),$_smarty_tpl);?>
</option>
								<option value="<?php echo CustomAttributeTypes::CHECKBOX;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::CHECKBOX]),$_smarty_tpl);?>
</option>
								<option value="<?php echo CustomAttributeTypes::DATETIME;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::DATETIME]),$_smarty_tpl);?>
</option>
							</select>
						</div>
						<div class="textBoxOptions">
							<div class="attributeLabel form-group has-feedback">
								<label for="ATTRIBUTE_LABEL"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DisplayLabel'),$_smarty_tpl);?>
</label>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>'ATTRIBUTE_LABEL','class'=>"required"),$_smarty_tpl);?>

								<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="ATTRIBUTE_LABEL"></i>
							</div>

							<div class="attributeValidationExpression form-group">
								<label for="ATTRIBUTE_VALIDATION_EXPRESSION"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ValidationExpression'),$_smarty_tpl);?>
</label>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>'ATTRIBUTE_VALIDATION_EXPRESSION'),$_smarty_tpl);?>

							</div>

							<div class="attributePossibleValues form-group has-feedback" style="display:none">
								<label for="ATTRIBUTE_POSSIBLE_VALUES"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PossibleValues'),$_smarty_tpl);?>
 <span class="note">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CommaSeparated'),$_smarty_tpl);?>
)</span></label>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>'ATTRIBUTE_POSSIBLE_VALUES','class'=>"required"),$_smarty_tpl);?>

								<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="ATTRIBUTE_POSSIBLE_VALUES"></i>
							</div>

							<div class="attributeSortOrder form-group">
								<label for="ATTRIBUTE_SORT_ORDER"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>
</label>
								<input type="number" class="form-control" min="0" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_SORT_ORDER'),$_smarty_tpl);?>
 maxlength=3 id="ATTRIBUTE_SORT_ORDER"/>
							</div>

							<div class="attributeUnique form-group">
								<label for="addAttributeEntityId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AppliesTo'),$_smarty_tpl);?>
</label>
								<a href="#" id="appliesTo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
</a>
								<div class="appliesToId" id="addAttributeEntityId" style="display:none;"></div>
							</div>

							<div class="attributeRequired form-group">
								<div class="checkbox">
									<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_IS_REQUIRED'),$_smarty_tpl);?>
 id="attributeRequired"/>
									<label for="attributeRequired"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Required'),$_smarty_tpl);?>
</label>
								</div>
							</div>

							<div class="attributeAdminOnly form-group">
								<div class="checkbox">
									<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_IS_ADMIN_ONLY'),$_smarty_tpl);?>
 id="ATTRIBUTE_IS_ADMIN_ONLY"/>
									<label for="ATTRIBUTE_IS_ADMIN_ONLY"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdminOnly'),$_smarty_tpl);?>
</label>
								</div>
							</div>
							<div class="attributeIsPrivate form-group">
								<div class="checkbox">
									<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_IS_PRIVATE'),$_smarty_tpl);?>
 id='attributePrivate'/>
									<label for="attributePrivate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>
</label>
								</div>
							</div>

							<div class="secondaryEntities no-show form-group">
								<div class="checkbox">
									<input type="checkbox" class="limitScope" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_LIMIT_SCOPE'),$_smarty_tpl);?>
 id="attributeLimitScope"/>
									<label for="attributeLimitScope"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LimitAttributeScope'),$_smarty_tpl);?>
</label>
								</div>
							</div>
							<div class="attributeSecondary no-show form-group">
                                <label for="attributeSecondaryCategory" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Category'),$_smarty_tpl);?>
</label>
								<select class="secondaryAttributeCategory form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_SECONDARY_CATEGORY'),$_smarty_tpl);?>

										id="attributeSecondaryCategory">
									<option value="<?php echo CustomAttributeCategory::USER;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</option>
									<option value="<?php echo CustomAttributeCategory::RESOURCE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</option>
									<option value="<?php echo CustomAttributeCategory::RESOURCE_TYPE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</option>
								</select>
							</div>
							<div class="attributeSecondary no-show form-group">
								<label for="attributeSecondaryEntityDescription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CollectFor'),$_smarty_tpl);?>
</label>
								<a href="#" class="secondaryPrompt" id="attributeSecondaryEntityDescription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
</a>

							</div>
						</div>

						<div id="entityChoices"></div>

					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="editAttributeDialog" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="editAttributeForm" ajaxAction="<?php echo ManageAttributesActions::UpdateAttribute;?>
" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EditAttribute'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Type'),$_smarty_tpl);?>
</label>
							<span class='editAttributeType'
								  id="editType<?php echo CustomAttributeTypes::SINGLE_LINE_TEXTBOX;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::SINGLE_LINE_TEXTBOX]),$_smarty_tpl);?>
</span>
							<span class='editAttributeType'
								  id="editType<?php echo CustomAttributeTypes::MULTI_LINE_TEXTBOX;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::MULTI_LINE_TEXTBOX]),$_smarty_tpl);?>
</span>
							<span class='editAttributeType'
								  id="editType<?php echo CustomAttributeTypes::SELECT_LIST;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::SELECT_LIST]),$_smarty_tpl);?>
</span>
							<span class='editAttributeType'
								  id="editType<?php echo CustomAttributeTypes::CHECKBOX;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[CustomAttributeTypes::CHECKBOX]),$_smarty_tpl);?>
</span>
						</div>
						<div class="textBoxOptions">
							<div class="form-group attributeLabel has-feedback">
								<label for="editAttributeLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DisplayLabel'),$_smarty_tpl);?>
</label>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>'ATTRIBUTE_LABEL','class'=>"required",'id'=>'editAttributeLabel'),$_smarty_tpl);?>

								<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="editAttributeLabel"></i>
							</div>

							<div class="form-group attributeValidationExpression">
								<label for="editAttributeRegex"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ValidationExpression'),$_smarty_tpl);?>
</label>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>'ATTRIBUTE_VALIDATION_EXPRESSION','id'=>'editAttributeRegex'),$_smarty_tpl);?>

							</div>

							<div class="form-group attributePossibleValues has-feedback" style="display:none">
								<label for="editAttributePossibleValues"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PossibleValues'),$_smarty_tpl);?>
 <span class="note">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CommaSeparated'),$_smarty_tpl);?>

										)</span></label>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>'ATTRIBUTE_POSSIBLE_VALUES','class'=>"required",'id'=>"editAttributePossibleValues"),$_smarty_tpl);?>

								<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="editAttributePossibleValues"></i>
							</div>

							<div class="form-group attributeSortOrder">
								<label for="editAttributeSortOrder"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>
</label>
								<input type="number" class="form-control" min="0" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_SORT_ORDER'),$_smarty_tpl);?>
 id="editAttributeSortOrder"/>
							</div>

							<div class="form-group attributeUnique">
								<label for="editAttributeEntityId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AppliesTo'),$_smarty_tpl);?>
</label>
								<a href="#" id="editAppliesTo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
</a>
								<div class="appliesToId" id='editAttributeEntityId' style="display:none;"></div>
							</div>

							<div class="form-group attributeRequired">
								<div class="checkbox">
									<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_IS_REQUIRED'),$_smarty_tpl);?>
 id='editAttributeRequired'/>
									<label for="editAttributeRequired"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Required'),$_smarty_tpl);?>
</label>
								</div>
							</div>

							<div class="form-group attributeAdminOnly">
								<div class="checkbox">
									<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_IS_ADMIN_ONLY'),$_smarty_tpl);?>
 id="editAttributeAdminOnly"/>
									<label for="editAttributeAdminOnly"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdminOnly'),$_smarty_tpl);?>
</label>
								</div>
							</div>

							<div class="form-group attributeIsPrivate">
								<div class="checkbox">
									<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_IS_PRIVATE'),$_smarty_tpl);?>
 id='editAttributePrivate'/>
									<label for="editAttributePrivate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>
</label>
								</div>
							</div>

							<div class="form-group secondaryEntities no-show">
								<div class="checkbox">
									<input type="checkbox" class="limitScope" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_LIMIT_SCOPE'),$_smarty_tpl);?>
 id="editAttributeLimitScope"/>
									<label for="editAttributeLimitScope"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LimitAttributeScope'),$_smarty_tpl);?>
</label>
								</div>
							</div>

							<div class="form-group attributeSecondary no-show">
                                <label for="editAttributeSecondaryCategory" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Category'),$_smarty_tpl);?>
</label>
                                <select class="secondaryAttributeCategory form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ATTRIBUTE_SECONDARY_CATEGORY'),$_smarty_tpl);?>

										id="editAttributeSecondaryCategory">
									<option value="<?php echo CustomAttributeCategory::USER;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</option>
									<option value="<?php echo CustomAttributeCategory::RESOURCE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</option>
									<option value="<?php echo CustomAttributeCategory::RESOURCE_TYPE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</option>
								</select>
							</div>

							<div class="form-group attributeSecondary no-show">
								<label for="editAttributeSecondaryEntityDescription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CollectFor'),$_smarty_tpl);?>
</label>
								<a href="#" class="secondaryPrompt" id="editAttributeSecondaryEntityDescription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
</a>
								
							</div>
						</div>
						<div id="editEntityChoices"></div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteForm" ajaxAction="<?php echo ManageAttributesActions::DeleteAttribute;?>
" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

						</div>
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

	<div id="attributeList">
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>"indicator"),$_smarty_tpl);?>


	<input type="hidden" id="activeId" value=""/>
    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/attributes.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>


	<?php echo '<script'; ?>
 type="text/javascript">

		$(document).ready(function () {
			var attributeOptions = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				changeCategoryUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::DATA_REQUEST;?>
=attributes&<?php echo QueryStringKeys::ATTRIBUTE_CATEGORY;?>
=',
				singleLine: '<?php echo CustomAttributeTypes::SINGLE_LINE_TEXTBOX;?>
',
				multiLine: '<?php echo CustomAttributeTypes::MULTI_LINE_TEXTBOX;?>
',
				selectList: '<?php echo CustomAttributeTypes::SELECT_LIST;?>
',
				date: '<?php echo CustomAttributeTypes::DATETIME;?>
',
				checkbox: '<?php echo CustomAttributeTypes::CHECKBOX;?>
',
				allText: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>strtr('All', array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
",
				categories: {
					reservation: <?php echo CustomAttributeCategory::RESERVATION;?>
,
					resource: <?php echo CustomAttributeCategory::RESOURCE;?>
,
					user: <?php echo CustomAttributeCategory::USER;?>
,
					resource_type: <?php echo CustomAttributeCategory::RESOURCE_TYPE;?>

				},
				resourcesUrl: 'manage_resources.php?<?php echo QueryStringKeys::DATA_REQUEST;?>
=all',
				usersUrl: 'manage_users.php?<?php echo QueryStringKeys::DATA_REQUEST;?>
=all',
				resourceTypesUrl: 'manage_resource_types.php?<?php echo QueryStringKeys::DATA_REQUEST;?>
=all'
			};

			var attributeManagement = new AttributeManagement(attributeOptions);
			attributeManagement.init();
		});
	<?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
