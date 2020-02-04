<?php
/* Smarty version 3.1.30, created on 2020-01-28 21:04:30
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Schedule/schedule-flipped.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e30a1de2c33d5_71976746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c1eaace7da5d0a405dbf57c875e75cd3c68bd85' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Schedule/schedule-flipped.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Schedule/schedule.tpl' => 1,
  ),
),false)) {
function content_5e30a1de2c33d5_71976746 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/home/xebloxvgfx88/public_html/yanbal/lib/external/Smarty/plugins/modifier.regex_replace.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3233427795e30a1de2840f1_79496863', "reservations");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6590161095e30a1de2c23e8_72171723', "scripts-before");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Schedule/schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "reservations"} */
class Block_3233427795e30a1de2840f1_79496863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_assignInScope('TodaysDate', Date::Now());
?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "resources", null, null);
?>

            <tr>
                <td class="resourcename">&nbsp;</td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource', false, NULL, 'resource_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('resourceId', $_smarty_tpl->tpl_vars['resource']->value->Id);
?>
					<?php ob_start();
echo Pages::RESERVATION;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('href', $_prefixVariable1."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value));
?>

                    <td class="resourcename" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="background-color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
 !important"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->CanAccess) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                               class="resourceNameSelector" <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</a>
						<?php } else { ?>
							<span resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" class="resourceNameSelector" <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</span>
						<?php }?>
                    </td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tr>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BoundDates']->value, 'date');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
?>
			<table class="reservations" border="1" cellpadding="0" width="100%">
			<thead>
			<?php $_smarty_tpl->_assignInScope('ts', $_smarty_tpl->tpl_vars['date']->value->Timestamp());
?>
			<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['periods']) ? $_smarty_tpl->tpl_vars['periods']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value);
$_smarty_tpl->_assignInScope('periods', $_tmp_array);
?>
			<?php if (count($_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value]) == 0) {
continue 1;
}?>
			<?php if ($_smarty_tpl->tpl_vars['date']->value->DateEquals($_smarty_tpl->tpl_vars['TodaysDate']->value)) {?>
                <tr class="today">
			<?php } else { ?>
            	<tr>
			<?php }?>
			<td class="resdate" colspan="<?php echo count($_smarty_tpl->tpl_vars['Resources']->value)+1;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>"schedule_daily"),$_smarty_tpl);?>
</td></tr>
			<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'resources');?>

			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value], 'period', false, NULL, 'period_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
?>
				<tr class="slots" id="<?php echo $_smarty_tpl->tpl_vars['period']->value->Id();?>
">
                    <td class="reslabel"><?php echo $_smarty_tpl->tpl_vars['period']->value->Label($_smarty_tpl->tpl_vars['date']->value);?>
</td>
                </tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tbody>
			<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'resources');?>

			</table>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php
}
}
/* {/block "reservations"} */
/* {block "scripts-before"} */
class Block_6590161095e30a1de2c23e8_72171723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function ()
    {
        var table = $('#reservations').find('table');
		var rows = new Object();
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource', false, NULL, 'resource_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BoundDates']->value, 'date');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('resourceId', $_smarty_tpl->tpl_vars['resource']->value->Id);
?>
				<?php $_smarty_tpl->_assignInScope('slots', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['resourceId']->value));
?>
				<?php ob_start();
echo Pages::RESERVATION;
$_prefixVariable2=ob_get_clean();
ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('href', $_prefixVariable2."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value)."&rd=".$_prefixVariable3);
?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot', false, NULL, 'slot_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('slotRef', ((string)$_smarty_tpl->tpl_vars['slot']->value->BeginDate()->Format('YmdHis')).((string)$_smarty_tpl->tpl_vars['resourceId']->value));
?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "slotContent", null);
?>

						<?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlot', array('Slot'=>$_smarty_tpl->tpl_vars['slot']->value,'Href'=>((string)$_smarty_tpl->tpl_vars['href']->value),'AccessAllowed'=>$_smarty_tpl->tpl_vars['resource']->value->CanAccess,'SlotRef'=>$_smarty_tpl->tpl_vars['slotRef']->value,'spantype'=>'row','ResourceId'=>$_smarty_tpl->tpl_vars['resourceId']->value), true);?>

					<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

					if (!rows['#<?php echo $_smarty_tpl->tpl_vars['slot']->value->BeginSlotId();?>
'])
					{
						rows['#<?php echo $_smarty_tpl->tpl_vars['slot']->value->BeginSlotId();?>
'] = [];
                    }
					rows['#<?php echo $_smarty_tpl->tpl_vars['slot']->value->BeginSlotId();?>
'].push('<?php echo smarty_modifier_regex_replace(trim($_smarty_tpl->tpl_vars['slotContent']->value),"/[\r\t\n]/"," ");?>
');
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


		$.each(rows, function(index, item)
		{
			$(index).find('td:last').after(item.join(''));
        });
    })
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "scripts-before"} */
}
