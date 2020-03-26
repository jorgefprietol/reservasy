<?php
/* Smarty version 3.1.30, created on 2020-03-26 16:18:43
  from "D:\xampp\htdocs\yanbal\tpl\Controls\Attributes\SelectList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7cc7d3ccbef2_64223532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e69a0ce004ae787d906d622566d1bc65e23283f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Controls\\Attributes\\SelectList.tpl',
      1 => 1580159970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7cc7d3ccbef2_64223532 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="form-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['searchmode']->value && $_smarty_tpl->tpl_vars['attribute']->value->Required()) {?>has-feedback<?php }?>">
    <label class="customAttribute <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>readonly<?php } elseif ($_smarty_tpl->tpl_vars['searchmode']->value) {?>search<?php } else { ?>standard<?php }?>"
           for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</label>
    <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
        <span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Value();?>
</span>
    <?php } else { ?>
        <select id="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" class="customAttribute form-control <?php echo $_smarty_tpl->tpl_vars['inputClass']->value;?>
"
                <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required() && !$_smarty_tpl->tpl_vars['searchmode']->value) {?>required<?php }?>>
            <option value="">--</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute']->value->PossibleValueList(), 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
                        <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Value() == $_smarty_tpl->tpl_vars['value']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required() && !$_smarty_tpl->tpl_vars['searchmode']->value) {?>
            <i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"></i>
        <?php }?>
    <?php }?>
</div>
<?php }
}
