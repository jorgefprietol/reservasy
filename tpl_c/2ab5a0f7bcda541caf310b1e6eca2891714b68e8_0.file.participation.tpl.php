<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:26:15
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/MyAccount/participation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3098e7810a01_85646007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ab5a0f7bcda541caf310b1e6eca2891714b68e8' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/MyAccount/participation.tpl',
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
function content_5e3098e7810a01_85646007 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true), 0, false);
?>


<div class="page-participation">
	<?php if (!empty($_smarty_tpl->tpl_vars['result']->value)) {?>
		<div><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</div>
	<?php }?>

	<div id="jsonResult" class="error no-show"></div>

	<div id="participation-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">

		<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'OpenInvitations'),$_smarty_tpl);?>
 <span class="label label-default"><?php echo count($_smarty_tpl->tpl_vars['Reservations']->value);?>
</span></h1>

		<ul class="list-unstyled participation">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Reservations']->value, 'reservation', false, NULL, 'invitations', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_invitations']->value['index']++;
?>
				<?php $_smarty_tpl->_assignInScope('referenceNumber', $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber);
?>
				<li class="actions row<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_invitations']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_invitations']->value['index'] : null)%2;?>
">
					<h3><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Title;?>
</h3>

					<h3><a href="<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=<?php echo $_smarty_tpl->tpl_vars['referenceNumber']->value;?>
" class="reservation"
						   referenceNumber="<?php echo $_smarty_tpl->tpl_vars['referenceNumber']->value;?>
">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>

							- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>
</a></h3>
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['referenceNumber']->value;?>
" class="referenceNumber"/>
					<button value="<?php echo InvitationAction::Accept;?>
"
							class="btn btn-success participationAction"><i class="fa fa-check-circle"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Accept"),$_smarty_tpl);?>
</button>
					<button value="<?php echo InvitationAction::Decline;?>
"
							class="btn btn-default participationAction"><i class="fa fa-times-circle"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Decline"),$_smarty_tpl);?>
</button>
				</li>
				<?php
}
} else {
?>

				<li class="no-data"><p class="text-muted"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</p></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>

	</div>
	<div class="dialog" style="display:none;">

	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif",'id'=>"indicator",'style'=>"display:none;"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true), 0, false);
?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"participation.js"),$_smarty_tpl);?>


	<?php echo '<script'; ?>
 type="text/javascript">

		$(document).ready(function () {

			var participationOptions = {
				responseType: 'json'
			};

			var participation = new Participation(participationOptions);
			participation.initParticipation();
		});

	<?php echo '</script'; ?>
>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
