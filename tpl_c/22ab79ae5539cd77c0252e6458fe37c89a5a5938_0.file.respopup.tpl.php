<?php
/* Smarty version 3.1.30, created on 2020-03-26 22:42:58
  from "D:\xampp\htdocs\yanbal\tpl\Ajax\respopup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d21e2527c54_45946462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22ab79ae5539cd77c0252e6458fe37c89a5a5938' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Ajax\\respopup.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d21e2527c54_45946462 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\xampp\\htdocs\\yanbal\\lib\\external\\Smarty\\plugins\\modifier.truncate.php';
?>

<?php if ($_smarty_tpl->tpl_vars['authorized']->value) {?>
    <div class="res_popup_details" style="margin:0">

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "name", null, null);
?>

            <div class="user">
                <?php if ($_smarty_tpl->tpl_vars['hideUserInfo']->value || $_smarty_tpl->tpl_vars['hideDetails']->value) {?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>

                <?php }?>
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('name',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "email", null, null);
?>

            <div class="email">
                <?php if (!$_smarty_tpl->tpl_vars['hideUserInfo']->value && !$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                <?php }?>
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('email',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'email'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "phone", null, null);
?>

            <div class="phone">
                <?php if (!$_smarty_tpl->tpl_vars['hideUserInfo']->value && !$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>

                <?php }?>
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('phone',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'phone'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "dates", null, null);
?>

            <?php $_smarty_tpl->_assignInScope('key', "res_popup");
?>
            <?php if ($_smarty_tpl->tpl_vars['startDate']->value->DateEquals($_smarty_tpl->tpl_vars['endDate']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('key', "res_popup_time");
?>
            <?php }?>
            <div class="dates"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['startDate']->value,'key'=>'res_popup'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['endDate']->value,'key'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
</div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('dates',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'dates'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);
?>

            <?php if (!$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
                <div class="title"><?php if ($_smarty_tpl->tpl_vars['title']->value != '') {
echo $_smarty_tpl->tpl_vars['title']->value;
} else {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoTitleLabel'),$_smarty_tpl);
}?></div>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('title',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "resources", null, null);
?>

            <div class="resources">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Resources"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['resources']->value);?>
):
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resources']->value, 'resource', false, NULL, 'resource_loop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_resource_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_resource_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_resource_loop']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_resource_loop']->value['total'];
?>
                    <?php echo $_smarty_tpl->tpl_vars['resource']->value->Name();?>

                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_resource_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_resource_loop']->value['last'] : null)) {?>, <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('resources',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'resources'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "participants", null, null);
?>

            <?php if (!$_smarty_tpl->tpl_vars['hideUserInfo']->value && !$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
                <div class="users">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Participants"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['participants']->value);?>
):
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['participants']->value, 'user', false, NULL, 'participant_loop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_participant_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_participant_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_participant_loop']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_participant_loop']->value['total'];
?>
                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->IsOwner()) {?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['user']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['user']->value->LastName),$_smarty_tpl);?>

                        <?php }?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_participant_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_participant_loop']->value['last'] : null)) {?>, <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('participants',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'participants'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "accessories", null, null);
?>

            <?php if (!$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
                <div class="accessories">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Accessories"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['accessories']->value);?>
):
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'accessory', false, NULL, 'accessory_loop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_accessory_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_accessory_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_accessory_loop']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_accessory_loop']->value['total'];
?>
                        <?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
 (<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
)
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_accessory_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_accessory_loop']->value['last'] : null)) {?>, <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('accessories',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'accessories'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "description", null, null);
?>

            <?php if (!$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
                <div class="summary"><?php if ($_smarty_tpl->tpl_vars['summary']->value != '') {
echo nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['summary']->value,300,"..."));
} else {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);
}?></div>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('description',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'description'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "attributes", null, null);
?>

            <?php if (!$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
                <?php if (count($_smarty_tpl->tpl_vars['attributes']->value) > 0) {?>
                    <br/>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('attr', "att".((string)$_smarty_tpl->tpl_vars['attribute']->value->Id()));
?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "attr", null, null);
?>

                            <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>
</div>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'attr');?>

                        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add($_smarty_tpl->tpl_vars['attr']->value,$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'attr'));?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php }?>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('attributes',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'attributes'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pending", null, null);
?>

            <?php if ($_smarty_tpl->tpl_vars['requiresApproval']->value) {?>
                <div class="pendingApproval"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PendingApproval'),$_smarty_tpl);?>
</div>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('pending',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pending'));?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "duration", null, null);
?>

            <div class="duration"><?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
</div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('duration',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'duration'));?>

        <!-- <?php echo $_smarty_tpl->tpl_vars['ReservationId']->value;?>
 -->

        <?php echo $_smarty_tpl->tpl_vars['formatter']->value->Display();?>

    </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InsufficientPermissionsError'),$_smarty_tpl);?>

<?php }
}
}
