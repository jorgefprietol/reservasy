<?php
/* Smarty version 3.1.30, created on 2020-03-26 16:17:50
  from "D:\xampp\htdocs\yanbal\tpl\SearchAvailability\search-availability.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7cc79eb86c91_21471804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fe1b4bff916587083e729df45592bb237f2aa1f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\SearchAvailability\\search-availability.tpl',
      1 => 1568865098,
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
function content_5e7cc79eb86c91_21471804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true,'Owl'=>true,'Timepicker'=>true), 0, false);
?>


<div class="page-search-availability">

    <form role="form" name="searchForm" id="searchForm" method="post"
          action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=search">
        <div class="form-group col-xs-12 col-sm-2">
            <div class="checkbox">
                <input type="checkbox" id="anyResource" checked="checked"/>
                <label for="anyResource"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AnyResource'),$_smarty_tpl);?>
</label>
            </div>
        </div>
        <div class="form-group col-xs-12 col-sm-10">
            <label for="resourceGroups" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</label>
            <select id="resourceGroups" class="form-control" multiple="multiple" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl);?>

                    disabled="disabled">
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

        <div class="clearfix"></div>

        
        <div class="form-group col-xs-6 col-sm-2">
            <div class="input-group">
                <label for="hours" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Hours'),$_smarty_tpl);?>
</label>
                <input type="number" min="0" step="1" value="0" class="form-control hours-minutes"
                       id="hours" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'HOURS'),$_smarty_tpl);?>
" autofocus="autofocus" />
                <span class="input-group-addon hours-minutes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Hours'),$_smarty_tpl);?>
</span>
            </div>
        </div>
        <div class="form-group col-xs-6 col-sm-2">
            <div class="input-group">
                <label for="minutes" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Minutes'),$_smarty_tpl);?>
</label>
                <input type="number" min="0" step="30" value="30" class="form-control hours-minutes"
                       id="minutes" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MINUTES'),$_smarty_tpl);?>
"/>
                <span class="input-group-addon hours-minutes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Minutes'),$_smarty_tpl);?>
</span>
            </div>
        </div>
        <div class="col-sm-1 hidden-xs">&nbsp;</div>
        <div class="form-group col-xs-12 col-sm-7">
            <input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_TIME'),$_smarty_tpl);?>
 type="text" id="startTime"
                                             class="form-control dateinput inline-block timepicker"
                                             value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('format'=>'h:00 A','date'=>'now'),$_smarty_tpl);?>
"
                                             title="Start time" disabled="disabled"/>
            -
            <input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_TIME'),$_smarty_tpl);?>
 type="text" id="endTime"
                                           class="form-control dateinput inline-block timepicker"
                                           value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('format'=>'h:00 A','date'=>Date::Now()->AddHours(1)),$_smarty_tpl);?>
"
                                           title="End time" disabled="disabled"/>
            <div class="checkbox inline">
                <input type="checkbox" id="specificTime" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SPECIFIC_TIME'),$_smarty_tpl);?>
 />
                <label for="specificTime"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SpecificTime'),$_smarty_tpl);?>
</label>
            </div>
        </div>
        

        <div class="form-group col-xs-12 col-sm-5">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input type="radio" id="today" checked="checked"
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
                <label class="btn btn-default">
                    <input type="radio" id="daterange" value="daterange" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <i class="fa fa-calendar"></i><span class="hidden-xs"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DateRange'),$_smarty_tpl);?>
</span>
                </label>
            </div>
        </div>
        <div class="form-group col-xs-12 col-sm-7">
            <label for="beginDate" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
            <input type="text" id="beginDate" class="form-control inline dateinput"
                   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
" disabled="disabled"/>
            <input type="hidden" id="formattedBeginDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>
 />
            -
            <label for="endDate" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
            <input type="text" id="endDate" class="form-control inline dateinput"
                   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
" disabled="disabled"/>
            <input type="hidden" id="formattedEndDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>
 />
        </div>
        <div class="clearfix"></div>

        <div class="form-group col-xs-12">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"RecurrenceControl"),$_smarty_tpl);?>

        </div>

        <div class="form-group col-xs-12">
            <a href="#" data-toggle="collapse" data-target="#advancedSearchOptions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoreOptions'),$_smarty_tpl);?>
</a>
        </div>

        <div class="clearfix"></div>

        <div class="collapse" id="advancedSearchOptions">
            <div class="form-group col-xs-6">
                <label for="maxCapacity" class="hidden"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>
</label>
                <input type='number' id='maxCapacity' min='0' size='5' maxlength='5'
                       class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>

                       value="<?php echo $_smarty_tpl->tpl_vars['MaxParticipantsFilter']->value;?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>
"/>

            </div>
            <div class="form-group col-xs-6">
                <label for="resourceType" class="hidden"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</label>
                <select id="resourceType" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>

                        class="form-control input-sm">
                    <option value="">- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
 -</option>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['ResourceTypes']->value,'label'=>'Name','key'=>'Id','selected'=>$_smarty_tpl->tpl_vars['ResourceTypeIdFilter']->value),$_smarty_tpl);?>

                </select>
            </div>

            <div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceAttributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'align'=>'vertical','searchmode'=>true,'namePrefix'=>'r','class'=>"col-sm-6 col-xs-12",'inputClass'=>"input-sm"),$_smarty_tpl);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php if (count($_smarty_tpl->tpl_vars['ResourceAttributes']->value)%2 != 0) {?>
                    <div class="col-sm-6 hidden-xs">&nbsp;</div>
                <?php }?>
            </div>

            <div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'align'=>'vertical','searchmode'=>true,'namePrefix'=>'rt','class'=>"col-sm-6 col-xs-12",'inputClass'=>"input-sm"),$_smarty_tpl);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php if (count($_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value)%2 != 0) {?>
                    <div class="col-sm-6 hidden-xs">&nbsp;</div>
                <?php }?>
            </div>
        </div>

        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-success col-xs-12"
                    value="submit" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUBMIT'),$_smarty_tpl);?>
><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FindATime'),$_smarty_tpl);?>
</button>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

        </div>
    </form>

    <div class="clearfix"></div>
    <div id="availability-results"></div>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true,'Owl'=>true,'Timepicker'=>true), 0, false);
?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.cookie.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"availability-search.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"date-helper.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"recurrence.js"),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"beginDate",'AltId'=>"formattedBeginDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndRepeat",'AltId'=>"formattedEndRepeat",'DefaultDate'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>


    <?php echo '<script'; ?>
 type="text/javascript">

        $(document).ready(function () {

            var recurOpts = {
                repeatType: '',
                repeatInterval: '',
                repeatMonthlyType: '',
                repeatWeekdays: []
            };

            var recurrence = new Recurrence(recurOpts);
            recurrence.init();

            var opts = {
                reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=[rid]&<?php echo QueryStringKeys::START_DATE;?>
=[sd]&<?php echo QueryStringKeys::END_DATE;?>
=[ed]"
            };
            var search = new AvailabilitySearch(opts);
            search.init();

            $('#resourceGroups').select2({
                placeholder: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
'
            });

            $('.timepicker').timepicker({
                timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
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
