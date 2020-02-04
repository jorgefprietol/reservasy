<?php
/* Smarty version 3.1.30, created on 2020-02-04 22:32:42
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Reservation/availability.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e39f10a992d13_39338272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '449b5c089544bd49ed59131b20606521d3b1689a' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Reservation/availability.tpl',
      1 => 1568865098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39f10a992d13_39338272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'displayGeneralReserved' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayGeneralReserved_108365225e39f10a8651f5_48405707',
  ),
  'displayMyReserved' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayMyReserved_108365225e39f10a8651f5_48405707',
  ),
  'displayAdminReserved' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayAdminReserved_108365225e39f10a8651f5_48405707',
  ),
  'displayMyParticipating' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayMyParticipating_108365225e39f10a8651f5_48405707',
  ),
  'displayReserved' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayReserved_108365225e39f10a8651f5_48405707',
  ),
  'displayPastTime' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayPastTime_108365225e39f10a8651f5_48405707',
  ),
  'displayReservable' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayReservable_108365225e39f10a8651f5_48405707',
  ),
  'displayRestricted' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayRestricted_108365225e39f10a8651f5_48405707',
  ),
  'displayUnreservable' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displayUnreservable_108365225e39f10a8651f5_48405707',
  ),
  'displaySlot' => 
  array (
    'compiled_filepath' => '/home/xebloxvgfx88/public_html/yanbal/tpl_c/449b5c089544bd49ed59131b20606521d3b1689a_0.file.availability.tpl.php',
    'uid' => '449b5c089544bd49ed59131b20606521d3b1689a',
    'call_name' => 'smarty_template_function_displaySlot_108365225e39f10a8651f5_48405707',
  ),
));
?>

























<a href="#" id="btnHideAvailability" class="pull-right"><i class="fa fa-arrow-circle-left"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ReservationDetails"),$_smarty_tpl);?>
</a>

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
$_tmp_array[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value);
$_smarty_tpl->_assignInScope('periods', $_tmp_array);
?>
    <div>
        <table id="reservations-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'format'=>'Y-m-d'),$_smarty_tpl);?>
" data-date="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'format'=>'Y-m-d'),$_smarty_tpl);?>
" class="reservations" border="1" cellpadding="0" width="100%">
            <thead>
            <tr>
                <td class="resdate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>"schedule_daily"),$_smarty_tpl);?>
</td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value], 'period');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
?>
                    <td class="reslabel" colspan="<?php echo $_smarty_tpl->tpl_vars['period']->value->Span();?>
" data-start="<?php echo $_smarty_tpl->tpl_vars['period']->value->Begin()->Hour()*60+$_smarty_tpl->tpl_vars['period']->value->Begin()->Minute();?>
" data-end="<?php echo $_smarty_tpl->tpl_vars['period']->value->End()->Hour()*60+$_smarty_tpl->tpl_vars['period']->value->End()->Minute();?>
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
                <?php $_smarty_tpl->_assignInScope('slots', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['resource']->value->GetId()));
?>
                <tr class="slots">
                    <td class="resourcename">
                        <span><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</span>
                    </td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                        <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlot', array('Slot'=>$_smarty_tpl->tpl_vars['slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['resource']->value->GetId()), true);?>

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


            <?php $_smarty_tpl->_assignInScope('slots', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['User']->value->UserId*-1));
?>
            <tr class="slots">
                <td class="resourcename">
                    <span><?php echo $_smarty_tpl->tpl_vars['User']->value->FullName;?>
</span>
                </td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlot', array('Slot'=>$_smarty_tpl->tpl_vars['slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['User']->value->UserId*-1), true);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Participants']->value, 'participant', false, NULL, 'participant_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['participant']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('slots', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['participant']->value->UserId*-1));
?>
                <tr class="slots">
                    <td class="resourcename">
                        <span><?php echo $_smarty_tpl->tpl_vars['participant']->value->FullName;?>
</span>
                    </td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                        <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlot', array('Slot'=>$_smarty_tpl->tpl_vars['slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['participant']->value->UserId*-1), true);?>

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


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Invitees']->value, 'invitee', false, NULL, 'participant_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['invitee']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('slots', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['invitee']->value->UserId*-1));
?>
                <tr class="slots">
                    <td class="resourcename">
                        <span><?php echo $_smarty_tpl->tpl_vars['invitee']->value->FullName;?>
</span>
                    </td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                        <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlot', array('Slot'=>$_smarty_tpl->tpl_vars['slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['invitee']->value->UserId*-1), true);?>

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
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
/* smarty_template_function_displayGeneralReserved_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayGeneralReserved_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayGeneralReserved_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" class="reserved">&nbsp;</td>
<?php
}}
/*/ smarty_template_function_displayGeneralReserved_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displayMyReserved_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayMyReserved_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayMyReserved_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayGeneralReserved', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displayMyReserved_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displayAdminReserved_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayAdminReserved_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayAdminReserved_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayGeneralReserved', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displayAdminReserved_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displayMyParticipating_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayMyParticipating_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayMyParticipating_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayGeneralReserved', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displayMyParticipating_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displayReserved_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayReserved_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayReserved_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayGeneralReserved', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displayReserved_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displayPastTime_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayPastTime_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayPastTime_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
"
        class="pasttime slot">&nbsp;
    </td>
<?php
}}
/*/ smarty_template_function_displayPastTime_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displayReservable_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayReservable_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayReservable_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
" class="reservable slot">&nbsp;
    </td>
<?php
}}
/*/ smarty_template_function_displayReservable_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displayRestricted_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayRestricted_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayRestricted_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
">&nbsp;</td>
<?php
}}
/*/ smarty_template_function_displayRestricted_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displayUnreservable_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displayUnreservable_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displayUnreservable_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
"
        class="unreservable slot">&nbsp;
    </td>
<?php
}}
/*/ smarty_template_function_displayUnreservable_108365225e39f10a8651f5_48405707 */
/* smarty_template_function_displaySlot_108365225e39f10a8651f5_48405707 */
if (!function_exists('smarty_template_function_displaySlot_108365225e39f10a8651f5_48405707')) {
function smarty_template_function_displaySlot_108365225e39f10a8651f5_48405707($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, $_smarty_tpl->tpl_vars['DisplaySlotFactory']->value->GetFunction($_smarty_tpl->tpl_vars['Slot']->value,true), array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displaySlot_108365225e39f10a8651f5_48405707 */
}
