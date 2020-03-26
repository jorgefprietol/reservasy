<?php
/* Smarty version 3.1.30, created on 2020-03-16 23:58:50
  from "D:\xampp\htdocs\yanbal\tpl\Search\search-reservations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7004aaebb628_88815365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd27b07502ebe5b27e725262a8e7d4ac565731df' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Search\\search-reservations.tpl',
      1 => 1580159920,
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
function content_5e7004aaebb628_88815365 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true,'Qtip'=>true), 0, false);
?>


<div class="page-search-reservations">

    <form role="form" name="searchForm" id="searchForm" method="post"
          action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=search">

        <div class="form-group col-sm-4">
            <label for="userFilter" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</label>
            <input id="userFilter" type="search" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['UserNameFilter']->value;?>
"
                   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
"/>
            <span class="searchclear glyphicon glyphicon-remove-circle" ref="userFilter,userId"></span>
            <input id="userId" type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['UserIdFilter']->value;?>
"/>
        </div>

        <div class="form-group col-sm-4">
            <label for="resources" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</label>
            <select id="resources" class="form-control" multiple="multiple" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl);?>
>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>

        <div class="form-group col-sm-4">
            <label for="schedules" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedules'),$_smarty_tpl);?>
</label>
            <select id="schedules" class="form-control" multiple="multiple" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID','multi'=>true),$_smarty_tpl);?>
>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'schedule');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>

        <div class="clearfix"></div>

        <div class="form-group col-sm-4">
            <label for="title" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Title'),$_smarty_tpl);?>
</label>
            <input type="search" id="title" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_TITLE'),$_smarty_tpl);?>

                   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Title'),$_smarty_tpl);?>
"/>
            <span class="searchclear glyphicon glyphicon-remove-circle" ref="title"></span>
        </div>

        <div class="form-group col-sm-4">
            <label for="description" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
</label>
            <input type="search" id="description" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DESCRIPTION'),$_smarty_tpl);?>

                   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
"/>
            <span class="searchclear glyphicon glyphicon-remove-circle" ref="description"></span>
        </div>

        <div class="form-group col-sm-4">
            <label for="referenceNumber" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</label>
            <input type="search" id="referenceNumber" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>

                   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
"/>
            <span class="searchclear glyphicon glyphicon-remove-circle" ref="referenceNumber"></span>
        </div>

        <div class="clearfix"></div>

        <div class="form-group col-xs-12">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="today"
                           value="today" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <span class="hidden-xs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
</span>
                    <span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['Today']->value,'key'=>'calendar_dates'),$_smarty_tpl);?>
</span>
                </label>
                <label class="btn btn-default">
                    <input type="radio" id="tomorrow" value="tomorrow" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <span class="hidden-xs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Tomorrow'),$_smarty_tpl);?>
</span>
                    <span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['Tomorrow']->value,'key'=>'calendar_dates'),$_smarty_tpl);?>
</span>
                </label>
                <label class="btn btn-default">
                    <input type="radio" id="thisweek" value="thisweek" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <span class="hidden-xs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisWeek'),$_smarty_tpl);?>
</span>
                    <span class="visible-xs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Week'),$_smarty_tpl);?>
</span>
                </label>

                <label class="btn btn-default active">
                    <input type="radio" id="daterange" value="daterange"
                           checked="checked" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <i class="fa fa-calendar"></i><span class="hidden-xs"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DateRange'),$_smarty_tpl);?>
</span>
                </label>
            </div>

            <label for="beginDate" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
            <input type="text" id="beginDate" class="form-control inline dateinput"
                   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
"/>
            <input type="hidden" id="formattedBeginDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>

                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['BeginDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
            -
            <label for="endDate" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
            <input type="text" id="endDate" class="form-control inline dateinput"
                   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
"/>
            <input type="hidden" id="formattedEndDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>

                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
        </div>

        <div class="col-xs-4"></div>

        <div class="clearfix"></div>

        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-success col-xs-12"
                    value="submit" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUBMIT'),$_smarty_tpl);?>
><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SearchReservations'),$_smarty_tpl);?>
</button>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

        </div>
    </form>

    <div class="clearfix"></div>
    <div id="reservation-results"></div>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true,'Qtip'=>2,'Clear'=>true), 0, false);
?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.cookie.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"autocomplete.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservation-search.js"),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"beginDate",'AltId'=>"formattedBeginDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['BeginDate']->value),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>


    <?php echo '<script'; ?>
 type="text/javascript">

        $(document).ready(function () {
            var opts = {
                autocompleteUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
                reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reservation.php?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[refnum]",
                popupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php"
            };

            var search = new ReservationSearch(opts);
            search.init();


            $('#resources').select2({
                placeholder: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
'
            });

            $('#schedules').select2({
                placeholder: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedules'),$_smarty_tpl);?>
'
            });
        });
    <?php echo '</script'; ?>
>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
