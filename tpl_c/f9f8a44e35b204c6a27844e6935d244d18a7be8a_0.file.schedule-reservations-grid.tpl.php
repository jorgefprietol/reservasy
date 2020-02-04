<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:08:53
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Schedule/schedule-reservations-grid.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3094d54524c5_57968274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f8a44e35b204c6a27844e6935d244d18a7be8a' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Schedule/schedule-reservations-grid.tpl',
      1 => 1568865098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3094d54524c5_57968274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'displaySlot' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/f9f8a44e35b204c6a27844e6935d244d18a7be8a_0.file.schedule-reservations-grid.tpl.php',
    'uid' => 'f9f8a44e35b204c6a27844e6935d244d18a7be8a',
    'call_name' => 'smarty_template_function_displaySlot_1320630325e3094d5418527_78593050',
  ),
));
?>


<?php $_smarty_tpl->_assignInScope('TodaysDate', Date::Now());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BoundDates']->value, 'date');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
?>
    <?php $_smarty_tpl->_assignInScope('ts', $_smarty_tpl->tpl_vars['date']->value->Timestamp());
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['periods']) ? $_smarty_tpl->tpl_vars['periods']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value,true);
$_smarty_tpl->_assignInScope('periods', $_tmp_array);
?>
    <?php if (count($_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value]) == 0) {
continue 1;
}?>
    <div style="position:relative;">
        <table class="reservations" border="1" cellpadding="0" width="100%">
            <thead>
            <?php if ($_smarty_tpl->tpl_vars['date']->value->DateEquals($_smarty_tpl->tpl_vars['TodaysDate']->value)) {?>
            <tr class="today">
                <?php } else { ?>
            <tr>
                <?php }?>
                <td class="resdate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>"schedule_daily"),$_smarty_tpl);?>
</td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value], 'period');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
?>
                    <td class="reslabel"
                        colspan="<?php echo $_smarty_tpl->tpl_vars['period']->value->Span();?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value->Label($_smarty_tpl->tpl_vars['date']->value);?>
</td>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource', false, NULL, 'resource_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('resourceId', $_smarty_tpl->tpl_vars['resource']->value->Id);
?>
                <?php $_smarty_tpl->_assignInScope('slots', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['resourceId']->value));
?>
                <?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl);
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('href', ((string)$_smarty_tpl->tpl_vars['CreateReservationPage']->value)."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value)."&rd=".$_prefixVariable5);
?>
                <tr class="slots">
                    <td class="resourcename"
                        <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="background-color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
 !important"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['resource']->value->CanAccess && $_smarty_tpl->tpl_vars['DailyLayout']->value->IsDateReservable($_smarty_tpl->tpl_vars['date']->value)) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                               class="resourceNameSelector"
                               <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</a>
                        <?php } else { ?>
                            <span resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                                  class="resourceNameSelector"
                                  <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</span>
                        <?php }?>
                    </td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('slotRef', ((string)$_smarty_tpl->tpl_vars['slot']->value->BeginDate()->Format('YmdHis')).((string)$_smarty_tpl->tpl_vars['resourceId']->value));
?>
                        <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlot', array('Slot'=>$_smarty_tpl->tpl_vars['slot']->value,'Href'=>((string)$_smarty_tpl->tpl_vars['href']->value),'AccessAllowed'=>$_smarty_tpl->tpl_vars['resource']->value->CanAccess,'SlotRef'=>$_smarty_tpl->tpl_vars['slotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['resourceId']->value), true);?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['flush'][0][0]->Flush(array(),$_smarty_tpl);?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
/* smarty_template_function_displaySlot_1320630325e3094d5418527_78593050 */
if (!function_exists('smarty_template_function_displaySlot_1320630325e3094d5418527_78593050')) {
function smarty_template_function_displaySlot_1320630325e3094d5418527_78593050($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, $_smarty_tpl->tpl_vars['DisplaySlotFactory']->value->GetFunction($_smarty_tpl->tpl_vars['Slot']->value,$_smarty_tpl->tpl_vars['AccessAllowed']->value), array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displaySlot_1320630325e3094d5418527_78593050 */
}
