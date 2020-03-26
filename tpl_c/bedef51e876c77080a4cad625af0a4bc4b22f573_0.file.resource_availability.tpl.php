<?php
/* Smarty version 3.1.30, created on 2020-03-16 23:57:47
  from "D:\xampp\htdocs\yanbal\tpl\Dashboard\resource_availability.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e70046b542b20_18263222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bedef51e876c77080a4cad625af0a4bc4b22f573' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Dashboard\\resource_availability.tpl',
      1 => 1580159920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e70046b542b20_18263222 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="dashboard dashboard availabilityDashboard" id="availabilityDashboard">
    <div class="dashboardHeader">
        <div class="pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceAvailability"),$_smarty_tpl);?>
</div>
        <div class="pull-right">
            <a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceAvailability"),$_smarty_tpl);?>
">
                <i class="glyphicon"></i>
                <span class="no-show">Expand/Collapse</span>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="dashboardContents">
        <div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>
</div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('availability', $_smarty_tpl->tpl_vars['Available']->value[$_smarty_tpl->tpl_vars['s']->value->GetId()]);
?>
            <?php if (count($_smarty_tpl->tpl_vars['availability']->value) > 0) {?>
            <h5><?php echo $_smarty_tpl->tpl_vars['s']->value->GetName();?>
</h5>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availability']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                <div class="availabilityItem">
                    <div class="col-xs-12 col-sm-5">
                        <i resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector fa fa-info-circle"></i>
                        <div class="resourceName" style="background-color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetColor();?>
;color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
;">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
                               resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
                               class="resourceNameSelector" style="color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
                        </div>
                    </div>
                    <div class="availability col-xs-12 col-sm-4">
                        <?php if ($_smarty_tpl->tpl_vars['i']->value->NextTime() != null) {?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableUntil'),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->NextTime(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

                        <?php } else { ?>
                            <span class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllNoUpcomingReservations','args'=>30),$_smarty_tpl);?>
</span>
                        <?php }?>
                    </div>
                    <div class="reserveButton col-xs-12 col-sm-3">
                        <a class="btn btn-xs col-xs-12"
                           href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserve'),$_smarty_tpl);?>
</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php
}
} else {
?>

                <div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unavailable'),$_smarty_tpl);?>
</div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('availability', $_smarty_tpl->tpl_vars['Unavailable']->value[$_smarty_tpl->tpl_vars['s']->value->GetId()]);
?>
            <?php if (count($_smarty_tpl->tpl_vars['availability']->value) > 0) {?>
            <h5><?php echo $_smarty_tpl->tpl_vars['s']->value->GetName();?>
</h5>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availability']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                <div class="availabilityItem">
                    <div class="col-xs-12 col-sm-5">
                        <i resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector fa fa-info-circle"></i>
                        <div class="resourceName" style="background-color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetColor();?>
;color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
;">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
                               resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
                               class="resourceNameSelector" style="color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
                        </div>
                    </div>
                    <div class="availability col-xs-12 col-sm-4">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableBeginningAt'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

                    </div>
                    <div class="reserveButton col-xs-12 col-sm-3">
                        <a class="btn btn-xs col-xs-12"
                           href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
&<?php echo QueryStringKeys::START_DATE;?>
=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'url_full'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserve'),$_smarty_tpl);?>
</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <?php
}
} else {
?>

                <div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UnavailableAllDay'),$_smarty_tpl);?>
</div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('availability', $_smarty_tpl->tpl_vars['UnavailableAllDay']->value[$_smarty_tpl->tpl_vars['s']->value->GetId()]);
?>
            <?php if (count($_smarty_tpl->tpl_vars['availability']->value) > 0) {?>
            <h5><?php echo $_smarty_tpl->tpl_vars['s']->value->GetName();?>
</h5>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Uavailability']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                <div class="availabilityItem">
                    <div class="col-xs-12 col-sm-5">
                        <i resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector fa fa-info-circle"></i>
                        <div class="resourceName" style="background-color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetColor();?>
;color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
;">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
                               resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
                               class="resourceNameSelector" style="color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
                        </div>
                    </div>
                    <div class="availability col-xs-12 col-sm-4">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableAt'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

                    </div>
                    <div class="reserveButton col-xs-12 col-sm-3">
                        <a class="btn btn-xs col-xs-12"
                           href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
&<?php echo QueryStringKeys::START_DATE;?>
=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'url_full'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserve'),$_smarty_tpl);?>
</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <?php
}
} else {
?>

                <div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div><?php }
}
