<?php
/* Smarty version 3.1.30, created on 2020-03-16 23:58:53
  from "D:\xampp\htdocs\yanbal\tpl\Search\search-reservations-results.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7004ad3b75b4_19799840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '360d0c2032b6f3601324fe51f0e0d794748b6ab5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Search\\search-reservations-results.tpl',
      1 => 1580159920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7004ad3b75b4_19799840 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:\\xampp\\htdocs\\yanbal\\lib\\external\\Smarty\\plugins\\function.cycle.php';
?>


<table class="table" id="reservationTable">
	<thead>
		<tr>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Title'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Created'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LastModified'),$_smarty_tpl);?>
</th>
		</tr>
	</thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Reservations']->value, 'reservation');
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
 editable" data-seriesId="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->SeriesId;?>
" data-refnum="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
			<td class="user"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['reservation']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['reservation']->value->LastName,'ignorePrivacy'=>($_smarty_tpl->tpl_vars['reservation']->value->OwnerId == $_smarty_tpl->tpl_vars['UserId']->value)),$_smarty_tpl);?>
</td>
			<td class="resource"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceName;?>
</td>
			<td class="title"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Title;?>
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
			<td class="created"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->CreatedDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>
</td>
			<td class="created"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->ModifiedDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>
</td>
		</tr>

		
		
		
		
		
		
		


	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tbody>
</table><?php }
}
