<?php
/* Smarty version 3.1.30, created on 2020-03-26 22:47:01
  from "D:\xampp\htdocs\yanbal\lang\es\ReservationCreated.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d22d5b56302_26994997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb13cb6f8aad515dbd9b9955d735db08a6f96e2d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\lang\\es\\ReservationCreated.tpl',
      1 => 1584726399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d22d5b56302_26994997 (Smarty_Internal_Template $_smarty_tpl) {
?>

	Detalles de la Reserva:
	<br/>
	<br/>

	Inicio: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	Fin: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	<?php if (count($_smarty_tpl->tpl_vars['ResourceNames']->value) > 1) {?>
		Salas:<br/>
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
		Uno o más Salas reservados requiere aprobación antes de su uso. Esta reserva quedará pendiente hasta que se apruebe.
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
