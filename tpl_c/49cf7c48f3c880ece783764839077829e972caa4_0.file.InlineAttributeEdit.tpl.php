<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:20:16
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/InlineAttributeEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e309780b99f00_27870401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49cf7c48f3c880ece783764839077829e972caa4' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/InlineAttributeEdit.tpl',
      1 => 1580159920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e309780b99f00_27870401 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['attribute']->value->AppliesToEntity($_smarty_tpl->tpl_vars['id']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('attributeId', "inline".((string)$_smarty_tpl->tpl_vars['attribute']->value->Id()).((string)$_smarty_tpl->tpl_vars['id']->value));
?>
	<div class="updateCustomAttribute" style="margin-bottom:0px">
		<?php $_smarty_tpl->_assignInScope('datatype', 'text');
?>
		<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Type() == CustomAttributeTypes::CHECKBOX) {?>
			<?php $_smarty_tpl->_assignInScope('datatype', 'checklist');
?>
		<?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->Type() == CustomAttributeTypes::MULTI_LINE_TEXTBOX) {?>
			<?php $_smarty_tpl->_assignInScope('datatype', 'textarea');
?>
		<?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->Type() == CustomAttributeTypes::SELECT_LIST) {?>
			<?php $_smarty_tpl->_assignInScope('datatype', 'select');
?>
		<?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->Type() == CustomAttributeTypes::DATETIME) {?>
			<?php $_smarty_tpl->_assignInScope('datatype', 'combodate');
?>
			<?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['value']->value,'key'=>'fullcalendar'),$_smarty_tpl);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('value', $_prefixVariable2);
?>
		<?php }?>
		<h5 class="inline"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</h5>
        <a class="update changeAttribute" href="#"><span class="fa fa-pencil-square-o"></span><span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</span></a>
		<span class="inlineAttribute"
			  id="inline<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"
			  data-type="<?php echo $_smarty_tpl->tpl_vars['datatype']->value;?>
"
			  data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			  data-value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
			  data-name="<?php echo FormKeys::ATTRIBUTE_PREFIX;
echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
"
				<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Type() == CustomAttributeTypes::SELECT_LIST) {?>
					data-source='[<?php if (!$_smarty_tpl->tpl_vars['attribute']->value->Required()) {?>{value:"",text:""},<?php }?>
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute']->value->PossibleValueList(), 'v', false, NULL, 'vals', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_vals']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_vals']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_vals']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_vals']->value['total'];
?>
						{value:"<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
",text:"<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"}<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_vals']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_vals']->value['last'] : null)) {?>,<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
]'
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Type() == CustomAttributeTypes::CHECKBOX) {?>
					data-source='[{value:"1",text:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>
"}]'
				<?php }?>
				>
		</span>
		<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Type() == CustomAttributeTypes::DATETIME) {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				$(function() {
					$('#inline<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
').editable({
						url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
",
						viewformat: "<?php echo Resources::GetInstance()->GetDateFormat('momentjs_datetime');?>
",
						format: "YYYY-M-D H:m",
						template: "<?php echo Resources::GetInstance()->GetDateFormat('momentjs_datetime');?>
",
						combodate: {
							minYear: "<?php echo Date::Now()->AddYears(-20)->Format('Y');?>
",
							maxYear: "<?php echo Date::Now()->AddYears(20)->Format('Y');?>
",
							firstItem: "none"
						},
						emptytext: '-',
						emptyclass: '',
						toggle : 'manual',
						params : function(params) {
							params.CSRF_TOKEN = $('#csrf_token').val();
							return params;
						}
					});
				});
			<?php echo '</script'; ?>
>
		<?php }?>
	</div>
<?php }
}
}
