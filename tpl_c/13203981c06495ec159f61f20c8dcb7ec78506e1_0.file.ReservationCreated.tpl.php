<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:24:22
  from "/home/xebloxvgfx88/public_html/yanbal/lang/es/ReservationCreated.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e309876b07740_83073243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13203981c06495ec159f61f20c8dcb7ec78506e1' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/lang/es/ReservationCreated.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e309876b07740_83073243 (Smarty_Internal_Template $_smarty_tpl) {
?>

	Detalles de la Reserva:
	<br/>
	<br/>

	Inicio: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	Fin: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	<?php if (count($_smarty_tpl->tpl_vars['ResourceNames']->value) > 1) {?>
		Recursos:<br/>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceNames']->value, 'resourceName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceName']->value) {
?>
			<?php echo $_smarty_tpl->tpl_vars['resourceName']->value;?>
<br/>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php } else { ?>
		Recurso: <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>
<br/>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['ResourceImage']->value) {?>
		<div class="resource-image"><img src="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ResourceImage']->value;?>
"/></div>
	<?php }?>

	Título: <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<br/>
	Descripción: <?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>
<br/>

	<?php if (count($_smarty_tpl->tpl_vars['RepeatDates']->value) > 0) {?>
		<br/>
		La reserva ocurren en las siguientes fechas:
		<br/>
	<?php }?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RepeatDates']->value, 'date', false, NULL, 'dates', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value),$_smarty_tpl);?>
<br/>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


	<?php if (count($_smarty_tpl->tpl_vars['Accessories']->value) > 0) {?>
		<br/>Accesorios:<br/>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Accessories']->value, 'accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
?>
			(<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
) <?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
<br/>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php }?>

	<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 0) {?>
		<br/>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
			<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>
</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<br/>
		Uno o más recursos reservados requiere aprobación antes de su uso. Esta reserva quedará pendiente hasta que se apruebe.
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['ApprovedBy']->value)) {?>
		<br/>
		Aprobada por: <?php echo $_smarty_tpl->tpl_vars['ApprovedBy']->value;?>

	<?php }?>

	<br/>
	<br/>
	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ReservationUrl']->value;?>
">Ver esta reserva</a> |
	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ICalUrl']->value;?>
">Agregar a un calendario</a> |
	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Iniciar sesión en Agenda Capacitaciones Yanbal</a><?php }
}
