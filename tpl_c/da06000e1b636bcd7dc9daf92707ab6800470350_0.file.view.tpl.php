<?php
/* Smarty version 3.1.30, created on 2020-01-28 05:07:59
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Reservation/view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e2fc1afd5fad1_05297513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da06000e1b636bcd7dc9daf92707ab6800470350' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Reservation/view.tpl',
      1 => 1580159806,
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
function content_5e2fc1afd5fad1_05297513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TitleKey'=>'ViewReservationHeading','Qtip'=>true,'Owl'=>true,'printCssFiles'=>'css/reservation.print.css'), 0, false);
?>

<div id="page-view-reservation">
    <div id="reservation-box" class="readonly">
        <div id="reservationFormDiv">
            <div class="row">
                <?php $_smarty_tpl->_assignInScope('detailsCol', "col-xs-12");
?>
                <?php $_smarty_tpl->_assignInScope('participantCol', "col-xs-12");
?>

                <?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value && $_smarty_tpl->tpl_vars['AllowParticipation']->value && $_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('detailsCol', "col-xs-12 col-sm-6");
?>
                    <?php $_smarty_tpl->_assignInScope('participantCol', "col-xs-12 col-sm-6");
?>
                <?php }?>

                <div id="reservationDetails" class="<?php echo $_smarty_tpl->tpl_vars['detailsCol']->value;?>
">
                    <div class="col-xs-12">
                        <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</label>
                        <?php if ($_smarty_tpl->tpl_vars['ShowUserDetails']->value && $_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
                            <a href="#" class="bindableUser" data-userid="<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ReservationUserName']->value;?>
</a>
                            <input id="userId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
"/>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>

                        <?php }?>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-md-6 no-padding-left">
                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>

                            <input type="hidden" id="formattedBeginDate"
                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['StartPeriods']->value, 'period');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['period']->value == $_smarty_tpl->tpl_vars['SelectedStart']->value) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['period']->value->Label();?>

                                    <input type="hidden" id="BeginPeriod" value="<?php echo $_smarty_tpl->tpl_vars['period']->value->Begin();?>
"/>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                        <div class="col-md-6 no-padding-left">
                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>

                            <input type="hidden" id="formattedEndDate" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EndPeriods']->value, 'period');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['period']->value == $_smarty_tpl->tpl_vars['SelectedEnd']->value) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['period']->value->LabelEnd();?>

                                    <input type="hidden" id="EndPeriod" value="<?php echo $_smarty_tpl->tpl_vars['period']->value->End();?>
"/>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        
                        <div class="durationText">
                            <span id="durationDays">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>

                            <span id="durationHours">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>

                            <span id="durationMinutes">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RepeatPrompt'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value[$_smarty_tpl->tpl_vars['RepeatType']->value]['key']),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
                            <div class="repeat-details">
                                <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RepeatEveryPrompt'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['RepeatOptions']->value[$_smarty_tpl->tpl_vars['RepeatType']->value]['everyKey'];?>

                                <?php if ($_smarty_tpl->tpl_vars['RepeatMonthlyType']->value != '') {?>
                                    (<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
)
                                <?php }?>
                                <?php if (count($_smarty_tpl->tpl_vars['RepeatWeekdays']->value) > 0) {?>
                                    <br/>
                                    <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RepeatDaysPrompt'),$_smarty_tpl);?>
</label>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RepeatWeekdays']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['day']->value]),$_smarty_tpl);?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php }?>
                                <br/><label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RepeatUntilPrompt'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>

                            </div>
                        <?php }?>
                    </div>

                    <div class="col-xs-12">
                        <div class="pull-left">
                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>

                            <input id="primaryResourceId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"/>
                            <div id="additionalResources" class="inline">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AvailableResources']->value, 'resource');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['AdditionalResourceIds']->value) && in_array($_smarty_tpl->tpl_vars['resource']->value->Id,$_smarty_tpl->tpl_vars['AdditionalResourceIds']->value)) {?>
                                        ,<?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>

                                        <input class="resourceId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"/>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                        </div>
                        <div class="pull-right">
                            <?php if ($_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
                                <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Accessories'),$_smarty_tpl);?>
</label>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Accessories']->value, 'accessory', false, NULL, 'accessoryLoop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_accessoryLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_accessoryLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_accessoryLoop']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_accessoryLoop']->value['total'];
?>
                                    <span class="badge quantity"><?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
</span>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_accessoryLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_accessoryLoop']->value['last'] : null)) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
,
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php }?>
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
                        <div class="col-xs-12">
                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationTitle'),$_smarty_tpl);?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['ReservationTitle']->value != '') {?>
                                <?php echo $_smarty_tpl->tpl_vars['ReservationTitle']->value;?>

                            <?php } else { ?>
                                <span class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</span>
                            <?php }?>
                        </div>
                        <div class="col-xs-12">
                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationDescription'),$_smarty_tpl);?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['Description']->value != '') {?>
                                <br/>
                                <?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>

                            <?php } else { ?>
                                <span class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</span>
                            <?php }?>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>

                            </div>
                        </div>
                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value && $_smarty_tpl->tpl_vars['AllowParticipation']->value && $_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
                    <div class="<?php echo $_smarty_tpl->tpl_vars['participantCol']->value;?>
">
                        <div id="reservationParticipation">
                            <div id="participationAction" class="participationAction">
                                <?php if ($_smarty_tpl->tpl_vars['IAmParticipating']->value && $_smarty_tpl->tpl_vars['CanAlterParticipation']->value) {?>
                                    <div class="alert alert-info" role="alert">
                                        <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YouAreAParticipant'),$_smarty_tpl);?>
</strong>
                                        <?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
                                            <button value="<?php echo InvitationAction::CancelAll;?>
"
                                                    class="btn btn-xs btn-info participationAction">
                                                <i class="fa fa-minus-square"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>

                                            </button>
                                            <button value="<?php echo InvitationAction::CancelInstance;?>
"
                                                    class="btn btn-xs btn-info participationAction">
                                                <i class="fa fa-minus-square"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>

                                            </button>
                                        <?php } else { ?>
                                            <button value="<?php echo InvitationAction::CancelInstance;?>
"
                                                    class="btn btn-xs btn-info participationAction">
                                                <i class="fa fa-minus-square"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CancelParticipation'),$_smarty_tpl);?>

                                            </button>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </div>

                            <div id="invitationAction" class="participationAction">
                                <?php if ($_smarty_tpl->tpl_vars['IAmInvited']->value && $_smarty_tpl->tpl_vars['CanAlterParticipation']->value) {?>
                                    <div class="alert alert-info" role="alert">
                                        <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YouAreInvited'),$_smarty_tpl);?>
</strong>
                                        <button value="<?php echo InvitationAction::Accept;?>
"
                                                class="btn btn-xs btn-info participationAction">
                                            <i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Attending"),$_smarty_tpl);?>

                                        </button>
                                        <button value="<?php echo InvitationAction::Decline;?>
"
                                                class="btn btn-xs btn-danger  participationAction">
                                            <i class="fa fa-user-times"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NotAttending"),$_smarty_tpl);?>

                                        </button>
                                    </div>
                                <?php }?>
                            </div>

                            <div id="joinReservation" class="participationAction">
                                <?php if ($_smarty_tpl->tpl_vars['AllowParticipantsToJoin']->value && !$_smarty_tpl->tpl_vars['IAmParticipating']->value && !$_smarty_tpl->tpl_vars['IAmInvited']->value && $_smarty_tpl->tpl_vars['CanAlterParticipation']->value) {?>
                                    <div class="alert alert-info " role="alert">
                                        <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YouCanJoinThisReservation'),$_smarty_tpl);?>
</strong>
                                        <?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
                                            <button value="<?php echo InvitationAction::JoinAll;?>
" id="btnJoinSeries"
                                                    class="btn btn-xs btn-info participationAction">
                                                <i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllInstances"),$_smarty_tpl);?>

                                            </button>
                                            <button value="<?php echo InvitationAction::Join;?>
" id="btnJoinInstance"
                                                    class="btn btn-xs btn-info participationAction">
                                                <i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ThisInstance"),$_smarty_tpl);?>

                                            </button>
                                        <?php } else { ?>
                                            <button value="<?php echo InvitationAction::Join;?>
" id="btnJoin"
                                                    class="btn btn-xs btn-info participationAction">
                                                <i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Join"),$_smarty_tpl);?>

                                            </button>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </div>

                            <span id="participate-indicator" class="fa fa-spinner fa-spin" style="display:none;"></span>

                            <?php if ($_smarty_tpl->tpl_vars['ShowUserDetails']->value) {?>
                                <div id="ro-participantList">
                                    <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ParticipantList'),$_smarty_tpl);?>
</label>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Participants']->value, 'participant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['participant']->value) {
?>
                                        <div><a href="#" class="bindableUser"
                                                data-userid="<?php echo $_smarty_tpl->tpl_vars['participant']->value->UserId;?>
"><?php echo $_smarty_tpl->tpl_vars['participant']->value->FullName;?>
</a></div>
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

                                </div>
                                <div id="ro-inviteeList">
                                    <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InvitationList'),$_smarty_tpl);?>
</label>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Invitees']->value, 'invitee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['invitee']->value) {
?>
                                        <div><a href="#" class="bindableUser"
                                                data-userid="<?php echo $_smarty_tpl->tpl_vars['invitee']->value->UserId;?>
"><?php echo $_smarty_tpl->tpl_vars['invitee']->value->FullName;?>
</a></div>
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

                                </div>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>

                <div class="col-xs-12 same-height">
                    <div id="custom-attributes-placeholder" class="col-xs-12">
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
                    <div class="col-xs-12 buttons">
                        <div class="pull-right">
                            <button type="button" class="btn btn-default" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
'">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>

                            </button>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12861103545e2fc1afd2af25_82907305', "deleteButtons");
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2422474805e2fc1afd31696_54930430', "submitButtons");
?>

                        </div>
                    </div>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
                <?php if (count($_smarty_tpl->tpl_vars['Attachments']->value) > 0) {?>
                    <div class="col-xs-12">
                        <div class="res-attachments">
                            <span class="heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Attachments'),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['Attachments']->value);?>
)</span>
                            <br/>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attachments']->value, 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                                <?php ob_start();
echo Pages::RESERVATION_FILE;
$_prefixVariable3=ob_get_clean();
ob_start();
echo QueryStringKeys::ATTACHMENT_FILE_ID;
$_prefixVariable4=ob_get_clean();
ob_start();
echo QueryStringKeys::REFERENCE_NUMBER;
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('attachmentUrl', "attachments/".$_prefixVariable3."?".$_prefixVariable4."=".((string)$_smarty_tpl->tpl_vars['attachment']->value->FileId())."&".$_prefixVariable5."=".((string)$_smarty_tpl->tpl_vars['ReferenceNumber']->value));
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['attachmentUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['attachmentUrl']->value;?>
"
                                   target="_blank"><?php echo $_smarty_tpl->tpl_vars['attachment']->value->FileName();?>
</a>
                                &nbsp;
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>
                <?php }?>
            <?php }?>
            <input type="hidden" id="referenceNumber" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'reference_number'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
"/>
        </div>
    </div>

    <div id="wait-box" class="wait-box">
        <div id="creatingNotification">
            <h3 id="createUpdateMessage" class="no-show">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9205900195e2fc1afd3edd3_56682036', "ajaxMessage");
?>

            </h3>
            <h3 id="joiningWaitingList" class="no-show">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddingToWaitlist'),$_smarty_tpl);?>

            </h3>
            <h3 id="checkingInMessage" class="no-show">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckingIn'),$_smarty_tpl);?>

            </h3>
            <h3 id="checkingOutMessage" class="no-show">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckingOut'),$_smarty_tpl);?>

            </h3>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

        </div>
        <div id="result"></div>
    </div>


    <div style="display: none">
        <form id="form-reservation" method="post" enctype="application/x-www-form-urlencoded">
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReservationId']->value;?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_ACTION'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReservationAction']->value;?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 id="hdnSeriesUpdateScope" value="<?php echo SeriesUpdateScope::FullSeries;?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DELETE_REASON'),$_smarty_tpl);?>
 value="" id="hdnDeleteReason"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_PERIOD'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['SelectedStart']->value->Begin();?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_PERIOD'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['SelectedEnd']->value->End();?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"/>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true,'Owl'=>true), 0, false);
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"participation.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"approval.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.autogrow.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"userPopup.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"date-helper.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"recurrence.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservation.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"autocomplete.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"force-numeric.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservation-reminder.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function () {

        var participationOptions = {
            responseType: 'json'
        };

        var participation = new Participation(participationOptions);
        participation.initReservation();

        var approvalOptions = {
            responseType: 'json',
            url: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_approve.php",
            returnUrl: '<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
'
        };

        var approval = new Approval(approvalOptions);
        approval.initReservation();

        var scopeOptions = {
            instance: '<?php echo SeriesUpdateScope::ThisInstance;?>
',
            full: '<?php echo SeriesUpdateScope::FullSeries;?>
',
            future: '<?php echo SeriesUpdateScope::FutureInstances;?>
'
        };

        var reservationOpts = {
            returnUrl: '<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
',
            scopeOpts: scopeOptions,
            deleteUrl: 'ajax/reservation_delete.php',
            checkinUrl: 'ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkin;?>
',
            checkoutUrl: 'ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkout;?>
',
            userAutocompleteUrl: "ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
            changeUserAutocompleteUrl: "ajax/autocomplete.php?type=<?php echo AutoCompleteType::MyUsers;?>
",
            waitlistUrl: 'ajax/reservation_waitlist.php',
        };
        var reservation = new Reservation(reservationOpts);
        reservation.init('<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
');

        var ajaxOptions = {
            target: '#result',   // target element(s) to be updated with server response
            beforeSubmit: reservation.preSubmit,  // pre-submit callback
            success: reservation.showResponse  // post-submit callback
        };

        $('#form-reservation').submit(function () {
            $(this).ajaxSubmit(ajaxOptions);
            return false;
        });

        $.blockUI.defaults.css.width = '60%';
        $.blockUI.defaults.css.left = '20%';
    });

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "deleteButtons"} */
class Block_12861103545e2fc1afd2af25_82907305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['CanJoinWaitList']->value) {?>
                                    <button id="btnWaitList" class="btn btn-default"><span
                                                class="fa fa-bell-o"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NotifyWhenAvailable'),$_smarty_tpl);?>

                                    </button>
                                <?php }?>

                                <?php ob_start();
echo Pages::CALENDAR_EXPORT;
$_prefixVariable1=ob_get_clean();
ob_start();
echo QueryStringKeys::REFERENCE_NUMBER;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('icsUrl', ((string)$_smarty_tpl->tpl_vars['Path']->value)."export/".$_prefixVariable1."?".$_prefixVariable2."=".((string)$_smarty_tpl->tpl_vars['ReferenceNumber']->value));
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['icsUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['icsUrl']->value;?>
" class="btn btn-default">
                                    <span class="fa fa-calendar"></span>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddToOutlook'),$_smarty_tpl);?>
</a>
                                <a href="http://www.google.com/calendar/event?action=TEMPLATE&text=<?php echo rawurlencode($_smarty_tpl->tpl_vars['ReservationTitle']->value);?>
&dates=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value->ToUtc(),'key'=>'google'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value->ToUtc(),'key'=>'google'),$_smarty_tpl);?>
&ctz=<?php echo $_smarty_tpl->tpl_vars['StartDate']->value->Timezone();?>
&details=<?php echo rawurlencode($_smarty_tpl->tpl_vars['Description']->value);?>
&location=<?php echo rawurlencode($_smarty_tpl->tpl_vars['Resource']->value->Name);?>
&trp=false&sprop=&sprop=name:"
                                   target="_blank" rel="nofollow" class="btn btn-default">
                                    <span class="fa fa-google"></span>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddToGoogleCalendar'),$_smarty_tpl);?>
</a>
                                <button type="button" class="btnPrint btn btn-default">
                                    <span class="fa fa-print"></span>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Print'),$_smarty_tpl);?>
</button>
                            <?php
}
}
/* {/block "deleteButtons"} */
/* {block "submitButtons"} */
class Block_2422474805e2fc1afd31696_54930430 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['CheckInRequired']->value) {?>
                                    <button type="button" class="btn btn-warning btnCheckin"><i
                                                class="fa fa-sign-in"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckIn'),$_smarty_tpl);?>
<span
                                                class="autoReleaseButtonMessage"
                                                data-autorelease-minutes="<?php echo $_smarty_tpl->tpl_vars['AutoReleaseMinutes']->value;?>
"> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReleasedIn'),$_smarty_tpl);?>

										<span class="autoReleaseMinutes"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</span></button>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['CheckOutRequired']->value) {?>
                                    <button type="button" class="btn btn-warning btnCheckout"><i
                                                class="fa fa-sign-out"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckOut'),$_smarty_tpl);?>
</button>
                                <?php }?>
                            <?php
}
}
/* {/block "submitButtons"} */
/* {block "ajaxMessage"} */
class Block_9205900195e2fc1afd3edd3_56682036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UpdatingReservation'),$_smarty_tpl);?>

                <?php
}
}
/* {/block "ajaxMessage"} */
}
