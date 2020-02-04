<?php
/* Smarty version 3.1.30, created on 2020-01-28 20:20:06
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Reports/common-reports.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3097763a5461_27924276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10bc934f0d1849548882289277d6aa621bdb9658' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Reports/common-reports.tpl',
      1 => 1580159970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Reports/chart.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5e3097763a5461_27924276 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>"scripts/js/jqplot/jquery.jqplot.min.css"), 0, false);
?>


<div id="page-common-reports">

    <div class="panel panel-default" id="saved-reports-panel">
        <div class="panel-heading">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CommonReports'),$_smarty_tpl);?>

        </div>
        <div class="panel-body no-padding">
            <div id="report-list">
                <table class="table">
                    <tbody>
                    <tr>
                        <td class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservedResources'),$_smarty_tpl);?>
</td>
                        <td class="right">
                            <a href="#" reportId="<?php echo CannedReport::RESERVATIONS_TODAY;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::RESERVATIONS_THISWEEK;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::RESERVATIONS_THISMONTH;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
                        </td>
                    </tr>
                    <tr class="alt">
                        <td class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservedAccessories'),$_smarty_tpl);?>
</td>
                        <td class="right">
                            <a href="#" reportId="<?php echo CannedReport::ACCESSORIES_TODAY;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::ACCESSORIES_THISWEEK;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::ACCESSORIES_THISMONTH;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceUsageTimeBooked'),$_smarty_tpl);?>
</td>
                        <td class="right">
                            <a href="#" reportId="<?php echo CannedReport::RESOURCE_TIME_ALLTIME;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllTime'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::RESOURCE_TIME_THISWEEK;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::RESOURCE_TIME_THISMONTH;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
                        </td>
                    </tr>
                    <tr class="alt">
                        <td class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceUsageReservationCount'),$_smarty_tpl);?>
</td>
                        <td class="right">
                            <a href="#" reportId="<?php echo CannedReport::RESOURCE_COUNT_ALLTIME;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllTime'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::RESOURCE_COUNT_THISWEEK;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::RESOURCE_COUNT_THISMONTH;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Top20UsersTimeBooked'),$_smarty_tpl);?>
</td>
                        <td class="right">
                            <a href="#" reportId="<?php echo CannedReport::USER_TIME_ALLTIME;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllTime'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::USER_TIME_THISWEEK;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::USER_TIME_THISMONTH;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
                        </td>
                    </tr>
                    <tr class="alt">
                        <td class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Top20UsersReservationCount'),$_smarty_tpl);?>
</td>
                        <td class="right">
                            <a href="#" reportId="<?php echo CannedReport::USER_COUNT_ALLTIME;?>
"
                               class="report report-action  runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllTime'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::USER_COUNT_THISWEEK;?>
"
                               class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
                            <a href="#" reportId="<?php echo CannedReport::USER_COUNT_THISMONTH;?>
"
                               class="report report-action  runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div id="resultsDiv">
</div>

<div id="indicator" style="display:none; text-align: center;">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif"),$_smarty_tpl);?>

</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("file:Reports/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reports/canned-reports.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reports/chart.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reports/common.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        var reportOptions = {
            generateUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Generate;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
            emailUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Email;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
            deleteUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Delete;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
            printUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::PrintReport;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
            csvUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Csv;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
="
        };

        var reports = new CannedReports(reportOptions);
        reports.init();

        var common = new ReportsCommon(
            {
                scriptUrl: '<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
',
                chartOpts: {
                    dateAxisFormat: '<?php echo $_smarty_tpl->tpl_vars['DateAxisFormat']->value;?>
'
                }

            }
        );
        common.init();
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
