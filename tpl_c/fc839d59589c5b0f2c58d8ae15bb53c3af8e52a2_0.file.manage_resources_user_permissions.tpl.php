<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:22:14
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Resources/manage_resources_user_permissions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3097f667d622_59412044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc839d59589c5b0f2c58d8ae15bb53c3af8e52a2' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Resources/manage_resources_user_permissions.tpl',
      1 => 1568865096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3097f667d622_59412044 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/xebloxvgfx88/public_html/yanbal/lib/external/Smarty/plugins/function.cycle.php';
?>
<h4><span id="totalUsers"><?php echo count($_smarty_tpl->tpl_vars['Users']->value);?>
</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Users'),$_smarty_tpl);?>
 <span class="no-show user-permission-spinner"><i class="fa fa-spinner fa-spin"></i></span> </h4>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
    <?php smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 form-group">
        <label for="permission<?php echo $_smarty_tpl->tpl_vars['u']->value->Id;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['u']->value->First,'last'=>$_smarty_tpl->tpl_vars['u']->value->Last),$_smarty_tpl);?>
</label>
        <select class="change-permission-type pull-right form-control input-sm inline-block" style="width:auto;" id="permission<?php echo $_smarty_tpl->tpl_vars['u']->value->Id;?>
" data-user-id="<?php echo $_smarty_tpl->tpl_vars['u']->value->Id;?>
">
            <option value="<?php echo ResourcePermissionType::None;?>
" class="none" <?php if ($_smarty_tpl->tpl_vars['u']->value->PermissionType == ResourcePermissionType::None) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</option>
            <option value="<?php echo ResourcePermissionType::Full;?>
" class="full" <?php if ($_smarty_tpl->tpl_vars['u']->value->PermissionType == ResourcePermissionType::Full) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FullAccess'),$_smarty_tpl);?>
</option>
            <option value="<?php echo ResourcePermissionType::View;?>
" class="view" <?php if ($_smarty_tpl->tpl_vars['u']->value->PermissionType == ResourcePermissionType::View) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewOnly'),$_smarty_tpl);?>
</option>
        </select>
        <div class="clearfix"></div>
        <input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->Id;?>
"/>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
