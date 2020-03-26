<?php
/* Smarty version 3.1.30, created on 2020-03-16 23:57:47
  from "D:\xampp\htdocs\yanbal\tpl\dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e70046b209a84_63368336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a654d545eb923e3a785b11ac15232e342daf442' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\dashboard.tpl',
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
function content_5e70046b209a84_63368336 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true,'Owl'=>true), 0, false);
?>


<div id="page-dashboard">
	<div id="dashboardList">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'dashboardItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dashboardItem']->value) {
?>
			<div><?php echo $_smarty_tpl->tpl_vars['dashboardItem']->value->PageLoad();?>
</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true,'Owl'=>true), 0, false);
?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"dashboard.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>


	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function () {

			var dashboardOpts = {
				reservationUrl: "<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=",
				summaryPopupUrl: "ajax/respopup.php",
				scriptUrl: '<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
'
			};

			var dashboard = new Dashboard(dashboardOpts);
			dashboard.init();
		});
	<?php echo '</script'; ?>
>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
