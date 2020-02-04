<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:12:59
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Ajax/resourcedetails.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3095cbd1f088_41952816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f181d488c92d66c967a2b4bac5bc1fc27bd713af' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Ajax/resourcedetails.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3095cbd1f088_41952816 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="resourceDetailsPopup">
    <?php $_smarty_tpl->_assignInScope('h4Style', '');
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['color']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('h4Style', " style=\"background-color:".((string)$_smarty_tpl->tpl_vars['color']->value).";color:".((string)$_smarty_tpl->tpl_vars['textColor']->value).";padding:5px 3px;\"");
?>
    <?php }?>
    <div>
        <h4 <?php echo $_smarty_tpl->tpl_vars['h4Style']->value;?>
><?php echo $_smarty_tpl->tpl_vars['resourceName']->value;?>
</h4>
        <a href="#" class="visible-sm hideResourceDetailsPopup"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
</a>
    </div>
    <?php $_smarty_tpl->_assignInScope('class', 'col-xs-6');
?>

    <?php if ($_smarty_tpl->tpl_vars['imageUrl']->value != '') {?>
        <?php $_smarty_tpl->_assignInScope('class', 'col-xs-5');
?>

        <div class="resourceImage col-xs-2">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0][0]->GetResourceImage(array('image'=>$_smarty_tpl->tpl_vars['imageUrl']->value),$_smarty_tpl);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resourceName']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="image" />
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                    <div class="item">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0][0]->GetResourceImage(array('image'=>$_smarty_tpl->tpl_vars['image']->value),$_smarty_tpl);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resourceName']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="image" />
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    <?php }?>
    <div class="description <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['description']->value != '') {?>
            <?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['url2link'][0][0]->CreateUrl(html_entity_decode($_smarty_tpl->tpl_vars['description']->value)));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);?>

        <?php }?>
        <br/>
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['notes']->value != '') {?>
            <?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['url2link'][0][0]->CreateUrl(html_entity_decode($_smarty_tpl->tpl_vars['notes']->value)));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoNotesLabel'),$_smarty_tpl);?>

        <?php }?>
        <br/>
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['contactInformation']->value != '') {?>
            <?php echo $_smarty_tpl->tpl_vars['contactInformation']->value;?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoContactLabel'),$_smarty_tpl);?>

        <?php }?>
        <br/>
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['locationInformation']->value != '') {?>
            <?php echo $_smarty_tpl->tpl_vars['locationInformation']->value;?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoLocationLabel'),$_smarty_tpl);?>

        <?php }?>
        <br/>
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['resourceType']->value != '') {?>
            <?php echo $_smarty_tpl->tpl_vars['resourceType']->value;?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResourceTypeLabel'),$_smarty_tpl);?>

        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
                <div>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
                <div>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
    </div>
    <div class="attributes <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
        <div>
            <?php if ($_smarty_tpl->tpl_vars['minimumDuration']->value != '') {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['minimumDuration']->value),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>

            <?php }?>
        </div>
        <div>
            <?php if ($_smarty_tpl->tpl_vars['maximumDuration']->value != '') {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['maximumDuration']->value),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>

            <?php }?>
        </div>
        <div>
            <?php if ($_smarty_tpl->tpl_vars['requiresApproval']->value) {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApprovalNone'),$_smarty_tpl);?>

            <?php }?>
        </div>
        <div>
            <?php if ($_smarty_tpl->tpl_vars['minimumNotice']->value != '') {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['minimumNotice']->value),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>

            <?php }?>
        </div>
        <div>
            <?php if ($_smarty_tpl->tpl_vars['maximumNotice']->value != '') {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['maximumNotice']->value),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>

            <?php }?>
        </div>
        <div>
            <?php if ($_smarty_tpl->tpl_vars['allowMultiday']->value) {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceNotAllowMultiDay'),$_smarty_tpl);?>

            <?php }?>
        </div>
        <div>
            <?php if ($_smarty_tpl->tpl_vars['maxParticipants']->value != '') {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['maxParticipants']->value),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['autoReleaseMinutes']->value != '') {?>
            <div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['autoReleaseMinutes']->value),$_smarty_tpl);?>

            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['isCheckInEnabled']->value != '') {?>
            <div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresCheckInNotification'),$_smarty_tpl);?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['creditsEnabled']->value) {?>
            <div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['offPeakCredits']->value),$_smarty_tpl);?>

            </div>
            <div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PeakCreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['peakCredits']->value),$_smarty_tpl);?>

            </div>
        <?php }?>
    </div>
    <div style="clearfix">&nbsp;</div>
</div><?php }
}
