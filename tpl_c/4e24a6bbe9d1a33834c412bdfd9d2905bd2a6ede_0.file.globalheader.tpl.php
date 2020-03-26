<?php
/* Smarty version 3.1.30, created on 2020-03-20 18:53:31
  from "D:\xampp\htdocs\yanbal\tpl\globalheader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e75031b0fb7d0_99501463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e24a6bbe9d1a33834c412bdfd9d2905bd2a6ede' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\globalheader.tpl',
      1 => 1580159806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e75031b0fb7d0_99501463 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="<?php echo $_smarty_tpl->tpl_vars['HtmlLang']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['HtmlTextDirection']->value;?>
">
<head>
    <title><?php if ($_smarty_tpl->tpl_vars['TitleKey']->value != '') {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['TitleKey']->value,'args'=>$_smarty_tpl->tpl_vars['TitleArgs']->value),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['Title']->value;
}?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
    <?php if ($_smarty_tpl->tpl_vars['ShouldLogout']->value) {?>
        <!--meta http-equiv="REFRESH"
			  content="<?php echo $_smarty_tpl->tpl_vars['SessionTimeoutSeconds']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
logout.php?<?php echo QueryStringKeys::REDIRECT;?>
=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"-->
    <?php }?>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo $_smarty_tpl->tpl_vars['FaviconUrl']->value;?>
"/>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo $_smarty_tpl->tpl_vars['FaviconUrl']->value;?>
"/>
    <!-- JavaScript -->
    <?php if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-3.3.1.min.js"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-migrate-3.0.1.min.js"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-ui.1.12.1.custom.min.js"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"bootstrap/js/bootstrap.min.js"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo '<script'; ?>

                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>

                src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
                integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
                crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript"
                src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php }?>

    <!-- End JavaScript -->

    <!-- CSS -->
    <?php if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/smoothness/jquery-ui.1.12.1.custom.min.css"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"css/font-awesome-4.7.0/css/font-awesome.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/bootstrap/css/bootstrap.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['Qtip']->value) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"css/jquery.qtip.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Validator']->value) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"css/bootstrapValidator.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['InlineEdit']->value) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/js/x-editable/css/bootstrap-editable.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/js/wysihtml5/bootstrap3-wysihtml5.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

        <?php }?>

    <?php } else { ?>
        <link rel="stylesheet"
              href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css"
              type="text/css"/>
        <?php if ($_smarty_tpl->tpl_vars['Validator']->value) {?>
            <link rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"
                  type="text/css"/>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['InlineEdit']->value) {?>
            <link rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css"
                  type="text/css"/>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/js/wysihtml5/bootstrap3-wysihtml5.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Select2']->value) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/select2/select2-4.0.5.min.css"),$_smarty_tpl);?>

        
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Timepicker']->value) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/timePicker.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Fullcalendar']->value) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/fullcalendar.min.css"),$_smarty_tpl);?>

        <link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/css/fullcalendar.print.css' media='print'/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Owl']->value) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/js/owl-2.2.1/assets/owl.carousel.min.css"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/js/owl-2.2.1/assets/owl.theme.default.css"),$_smarty_tpl);?>

    <?php }?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-ui-timepicker-addon.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/jquery-ui-timepicker-addon.css"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"booked.css"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['cssFiles']->value != '') {?>
        <?php $_smarty_tpl->_assignInScope('CssFileList', explode(',',$_smarty_tpl->tpl_vars['cssFiles']->value));
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CssFileList']->value, 'cssFile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->value) {
?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['cssFile']->value),$_smarty_tpl);?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CssUrl']->value != '') {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['CssUrl']->value),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CssExtensionFile']->value != '') {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['CssExtensionFile']->value),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['printCssFiles']->value != '') {?>
        <?php $_smarty_tpl->_assignInScope('PrintCssFileList', explode(',',$_smarty_tpl->tpl_vars['printCssFiles']->value));
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PrintCssFileList']->value, 'cssFile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->value) {
?>
            <link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
' media='print'/>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
    <!-- End CSS -->
</head>
<body <?php if ($_smarty_tpl->tpl_vars['HideNavBar']->value == true) {?>style="padding-top:0;"<?php }?>>

<?php if ($_smarty_tpl->tpl_vars['HideNavBar']->value == false) {?>
    <nav class="navbar navbar-default <?php if ($_smarty_tpl->tpl_vars['IsDesktop']->value) {?>navbar-fixed-top<?php } else { ?>navbar-static-top adjust-nav-bar-static<?php }?>"
         role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#booked-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"
                   href="<?php echo $_smarty_tpl->tpl_vars['HomeUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>((string)$_smarty_tpl->tpl_vars['LogoUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['Version']->value),'alt'=>((string)$_smarty_tpl->tpl_vars['Title']->value),'class'=>"logo"),$_smarty_tpl);?>
</a>
            </div>
            <div class="collapse navbar-collapse" id="booked-navigation">
                <ul class="nav navbar-nav">
                    <?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value) {?>
                        <li id="navDashboard"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::DASHBOARD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Dashboard"),$_smarty_tpl);?>
</a></li>
                        <li class="dropdown" id="navMyAccountDropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"MyAccount"),$_smarty_tpl);?>
 <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="navProfile"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::PROFILE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Profile"),$_smarty_tpl);?>
</a></li>
                                <li id="navPassword"><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::PASSWORD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangePassword"),$_smarty_tpl);?>
</a></li>
                                <li id="navNotification">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::NOTIFICATION_PREFERENCES;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NotificationPreferences"),$_smarty_tpl);?>
</a>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value) {?>
                                    <li id="navInvitations">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::PARTICIPATION;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"OpenInvitations"),$_smarty_tpl);?>
</a>
                                    </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
                                    <li id="navUserCredits">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::CREDITS;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Credits"),$_smarty_tpl);?>
</a>
                                    </li>
                                <?php }?>
                            </ul>
                        </li>
                        <li class="dropdown" id="navScheduleDropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Schedule"),$_smarty_tpl);?>
 <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="navBookings"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::SCHEDULE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Bookings"),$_smarty_tpl);?>
</a>
                                </li>
                                <li id="navMyCalendar"><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::MY_CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"MyCalendar"),$_smarty_tpl);?>
</a></li>
                                <li id="navResourceCalendar"><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceCalendar"),$_smarty_tpl);?>
</a></li>
                                <!--<li class="menuitem"><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Current Status"),$_smarty_tpl);?>
</a></li>-->
                                <li id="navFindATime"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::OPENINGS;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FindATime"),$_smarty_tpl);?>
</a>
                                </li>
                                <li id="navFindATime"><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::SEARCH_RESERVATIONS;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"SearchReservations"),$_smarty_tpl);?>
</a>
                                </li>
                            </ul>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
                            <li class="dropdown" id="navApplicationManagementDropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ApplicationManagement"),$_smarty_tpl);?>

                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li id="navManageReservations"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageReservations"),$_smarty_tpl);?>
</a>
                                    </li>
                                    <li id="navManageBlackouts"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_blackouts.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageBlackouts"),$_smarty_tpl);?>
</a>
                                    </li>
                                    <li id="navManageQuotas"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_quotas.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageQuotas"),$_smarty_tpl);?>
</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li id="navManageSchedules"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_schedules.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageSchedules"),$_smarty_tpl);?>
</a>
                                    <li id="navManageResources"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a>
                                    </li>
                                    <li id="navManageAccessories"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_accessories.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAccessories"),$_smarty_tpl);?>
</a>
                                    </li>

                                    <li class="divider"></li>
                                    <li id="navManageUsers"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_users.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageUsers"),$_smarty_tpl);?>
</a>
                                    </li>
                                    <li id="navManageGroups"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a>
                                    </li>

                                    <li id="navManageAnnouncements"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_announcements.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAnnouncements"),$_smarty_tpl);?>
</a>
                                    </li>
                                    <li class="divider"></li>
                                    <?php if ($_smarty_tpl->tpl_vars['PaymentsEnabled']->value) {?>
                                        <li id="navManagePayments"><a
                                                    href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_payments.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManagePayments"),$_smarty_tpl);?>
</a>
                                        </li>
                                    <?php }?>
                                    
                                    <li id="navManageAttributes"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_attributes.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"CustomAttributes"),$_smarty_tpl);?>
</a>
                                    </li>
                                </ul>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['CanViewResponsibilities']->value) {?>
                            <li class="dropdown" id="navResponsibilitiesDropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Responsibilities"),$_smarty_tpl);?>
 <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php if ($_smarty_tpl->tpl_vars['CanViewGroupAdmin']->value) {?>
                                        <li id="navResponsibilitiesGAUsers"><a
                                                    href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_group_users.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageUsers"),$_smarty_tpl);?>
</a>
                                        </li>
                                        <li id="navResponsibilitiesGAReservations"><a
                                                    href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_group_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"GroupReservations"),$_smarty_tpl);?>
</a>
                                        </li>
                                        <li id="navResponsibilitiesGAGroups"><a
                                                    href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['CanViewResourceAdmin']->value || $_smarty_tpl->tpl_vars['CanViewScheduleAdmin']->value) {?>
                                        <li id="navResponsibilitiesRAResources"><a
                                                    href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a>
                                        </li>
                                        <li id="navResponsibilitiesRABlackouts"><a
                                                    href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_blackouts.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageBlackouts"),$_smarty_tpl);?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['CanViewResourceAdmin']->value) {?>
                                        <li id="navResponsibilitiesRAReservations">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceReservations"),$_smarty_tpl);?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['CanViewScheduleAdmin']->value) {?>
                                        <li id="navResponsibilitiesSASchedules">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_schedules.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageSchedules"),$_smarty_tpl);?>
</a>
                                        </li>
                                        <li id="navResponsibilitiesSAReservations">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_schedule_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ScheduleReservations"),$_smarty_tpl);?>
</a>
                                        </li>
                                    <?php }?>
                                    <li id="navResponsibilitiesAnnouncements">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_announcements.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAnnouncements"),$_smarty_tpl);?>
</a>
                                    </li>
                                </ul>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['CanViewReports']->value) {?>
                            <li class="dropdown" id="navReportsDropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Reports"),$_smarty_tpl);?>
 <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li id="navGenerateReport">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_GENERATE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GenerateReport'),$_smarty_tpl);?>
</a>
                                    </li>
                                    <li id="navSavedReports">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_SAVED;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MySavedReports'),$_smarty_tpl);?>
</a>
                                    </li>
                                    <li id="navCommonReports">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_COMMON;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CommonReports'),$_smarty_tpl);?>
</a>
                                    </li>
                                </ul>
                            </li>
                        <?php }?>
                    <?php }?>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_smarty_tpl->tpl_vars['ShowScheduleLink']->value) {?>
                        <li class="dropdown" id="navScheduleDropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Schedule"),$_smarty_tpl);?>
 <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="navViewSchedule"><a href="view-schedule.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewSchedule'),$_smarty_tpl);?>
</a>
                                </li>
                                <li id="navViewCalendar"><a href="view-calendar.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewCalendar'),$_smarty_tpl);?>
</a>
                                </li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
                        <li class="dropdown" id="navHelpDropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="no-show">Configuration</span>
                                <span class="fa fa-cog"></span>
                                <?php if ($_smarty_tpl->tpl_vars['ShowNewVersion']->value) {?><span class="badge badge-new-version new-version"
                                                          id="newVersionBadge"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NewVersion'),$_smarty_tpl);?>
</span><?php }?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if ($_smarty_tpl->tpl_vars['EnableConfigurationPage']->value) {?>
                                    <li id="navManageConfiguration"><a
                                                href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_configuration.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageConfiguration"),$_smarty_tpl);?>
</a>
                                    </li>
                                <?php }?>
                                <li id="navEmailTemplates"><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_email_templates.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageEmailTemplates"),$_smarty_tpl);?>
</a>
                                </li>
                                <li id="navLookAndFeel"><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_theme.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LookAndFeel"),$_smarty_tpl);?>
</a>
                                </li>
                                <li id="navImport"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/import.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Import"),$_smarty_tpl);?>
</a>
                                </li>
                                <li id="navServerSettings"><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/server_settings.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ServerSettings"),$_smarty_tpl);?>
</a>
                                </li>
                                <li id="navDataCleanup"><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/data_cleanup.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DataCleanup"),$_smarty_tpl);?>
</a>
                                </li>
                            </ul>
                        </li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value) {?>
                        <li id="navSignOut"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
logout.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"SignOut"),$_smarty_tpl);?>
</a></li>
                    <?php } else { ?>
                        <li id="navLogIn"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
index.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LogIn"),$_smarty_tpl);?>
</a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
<?php }?>

<div id="main" class="container-fluid" <?php if ($_smarty_tpl->tpl_vars['HideNavBar']->value) {?>style="padding-bottom:0;"<?php }?>>
<?php }
}
