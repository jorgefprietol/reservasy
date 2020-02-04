<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:18:27
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Attributes/attribute-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e309713cd5799_69456253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0feff3f035906343535af930d35405a08efbec92' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Attributes/attribute-list.tpl',
      1 => 1580159944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e309713cd5799_69456253 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/xebloxvgfx88/public_html/yanbal/lib/external/Smarty/plugins/function.cycle.php';
?>

<h3><?php echo count($_smarty_tpl->tpl_vars['Attributes']->value);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Attributes'),$_smarty_tpl);?>
</h3>
<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 0) {?>
	<table class="table">
		<thead>
		<tr>
			<th>ID</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DisplayLabel'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Type'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Required'),$_smarty_tpl);?>
</th>
			<?php if ($_smarty_tpl->tpl_vars['Category']->value != CustomAttributeCategory::RESERVATION) {?>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AppliesTo'),$_smarty_tpl);?>
</th>
			<?php }?>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CollectedFor'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ValidationExpression'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PossibleValues'),$_smarty_tpl);?>
</th>
			<?php if ($_smarty_tpl->tpl_vars['Category']->value == CustomAttributeCategory::RESERVATION) {?>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>
</th>
			<?php }?>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdminOnly'),$_smarty_tpl);?>
</th>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</th>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</th>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
			<?php smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" attributeId="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->SortOrder();?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</td>
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[$_smarty_tpl->tpl_vars['attribute']->value->Type()]),$_smarty_tpl);?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required()) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>

					<?php }?></td>
				<?php if ($_smarty_tpl->tpl_vars['Category']->value != CustomAttributeCategory::RESERVATION) {?>
					<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->UniquePerEntity()) {?>
							<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->EntityDescriptions(),', ');?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>

						<?php }?>
					</td>
				<?php }?>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['attribute']->value->HasSecondaryEntities()) {?>
						<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->SecondaryEntityDescriptions(),', ');?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>

					<?php }?>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Regex();?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->PossibleValues();?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['Category']->value == CustomAttributeCategory::RESERVATION) {?>
					<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->IsPrivate()) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>

						<?php }?></td>
				<?php }?>
				<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->AdminOnly()) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);
} else {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);
}?></td>
				<td class="action">
					<a href="#" class="update edit">
                        <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</span>
                        <span class="fa fa-edit icon edit"></span>
                    </a>
				</td>
				<td class="action">
					<a href="#" class="update delete" attributeId="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
">
                        <span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Remove'),$_smarty_tpl);?>
</span>
                        <span class="fa fa-trash icon remove"></span>
                    </a>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</tbody>
	</table>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
	var attributeList = new Object();

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
	attributeList[<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
] = {
		id: <?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
,
		label: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->Label(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
		required: <?php echo $_smarty_tpl->tpl_vars['attribute']->value->Required();?>
,
		regex: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->Regex(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
		possibleValues: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->PossibleValues(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
		type: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Type();?>
",
		sortOrder: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->SortOrder();?>
",
		<?php if (count($_smarty_tpl->tpl_vars['attribute']->value->EntityIds()) > 0) {?>
		entityIds: ["<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->EntityIds(),'","');?>
"],
		<?php } else { ?>
		entityIds: [],
		<?php }?>
		entityDescriptions: ["<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->EntityDescriptions(),'","');?>
"],
		adminOnly: <?php echo $_smarty_tpl->tpl_vars['attribute']->value->AdminOnly();?>
,
		<?php if ($_smarty_tpl->tpl_vars['attribute']->value->HasSecondaryEntities()) {?>
		secondaryEntityIds: ["<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->SecondaryEntityIds(),'","');?>
"],
		secondaryEntityDescriptions: ["<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->SecondaryEntityDescriptions(),'","');?>
"],
		<?php } else { ?>
		secondaryEntityIds: [],
		secondaryEntityDescriptions: [],
		<?php }?>
		secondaryCategory: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->SecondaryCategory();?>
",
		isPrivate: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->IsPrivate();?>
"
	};
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


	$('#attributeList').data('list', attributeList);
<?php echo '</script'; ?>
><?php }
}
