<?php
/* Smarty version 3.1.30, created on 2020-03-26 22:45:36
  from "D:\xampp\htdocs\yanbal\tpl\Admin\Configuration\manage_configuration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d2280c502a4_46805738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd033010ad6d43a6a6e60531181b9e935b49018' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yanbal\\tpl\\Admin\\Configuration\\manage_configuration.tpl',
      1 => 1580159944,
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
function content_5e7d2280c502a4_46805738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'list_settings' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\yanbal\\tpl_c\\7bd033010ad6d43a6a6e60531181b9e935b49018_0.file.manage_configuration.tpl.php',
    'uid' => '7bd033010ad6d43a6a6e60531181b9e935b49018',
    'call_name' => 'smarty_template_function_list_settings_5518742935e7d2280bb2c03_18016053',
  ),
));
if (!is_callable('smarty_function_cycle')) require_once 'D:\\xampp\\htdocs\\yanbal\\lib\\external\\Smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_html_options')) require_once 'D:\\xampp\\htdocs\\yanbal\\lib\\external\\Smarty\\plugins\\function.html_options.php';
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-manage-configuration" class="admin-page">

    <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageConfiguration'),$_smarty_tpl);?>
</h1>

    <?php if ($_smarty_tpl->tpl_vars['ShowScriptUrlWarning']->value) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ScriptUrlWarning','args'=>((string)$_smarty_tpl->tpl_vars['CurrentScriptUrl']->value).",".((string)$_smarty_tpl->tpl_vars['SuggestedScriptUrl']->value)),$_smarty_tpl);?>

        </div>
    <?php }?>

    <form id="frmConfigFile" method="GET" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
" role="form">
        <div class="form-group">
            <label for="cf"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'File'),$_smarty_tpl);?>
</label>
            <select name="cf" id="cf" class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ConfigFiles']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('selected', '');
?>
                    <?php if ($_smarty_tpl->tpl_vars['file']->value->Location == $_smarty_tpl->tpl_vars['SelectedFile']->value) {
$_smarty_tpl->_assignInScope('selected', "selected='selected'");
}?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['file']->value->Location;?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['file']->value->Name;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>
    </form>

    


    <?php if (!$_smarty_tpl->tpl_vars['IsPageEnabled']->value) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ConfigurationUiNotEnabled'),$_smarty_tpl);?>

        </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['IsConfigFileWritable']->value) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ConfigurationFileNotWritable'),$_smarty_tpl);?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['IsPageEnabled']->value && $_smarty_tpl->tpl_vars['IsConfigFileWritable']->value) {?>

        <?php $_smarty_tpl->_assignInScope('HelpUrl', ((string)$_smarty_tpl->tpl_vars['ScriptUrl']->value)."/help.php?ht=admin");
?>
        <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ConfigurationUpdateHelp','args'=>$_smarty_tpl->tpl_vars['HelpUrl']->value),$_smarty_tpl);?>
</h3>
        <div id="updatedMessage" class="alert alert-success" style="display:none;">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ConfigurationUpdated'),$_smarty_tpl);?>

        </div>
        <div id="configSettings">

            <input type="button" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
" class='btn btn-success save'/>

            <form id="frmConfigSettings" method="post" ajaxAction="<?php echo ConfigActions::Update;?>
"
                  action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
                <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GeneralConfigSettings'),$_smarty_tpl);?>
</h3>
                <fieldset>
                    <div class="no-style config-settings">
                        <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'list_settings', array('settings'=>$_smarty_tpl->tpl_vars['Settings']->value), true);?>

                    </div>
                </fieldset>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SectionSettings']->value, 'settings', false, 'section');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['settings']->value) {
?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
</h3>
                    <fieldset>
                        <div class="no-style config-settings">
                            <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'list_settings', array('settings'=>$_smarty_tpl->tpl_vars['settings']->value), true);?>

                        </div>
                    </fieldset>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <input type="hidden" name="setting_names" value="<?php echo $_smarty_tpl->tpl_vars['SettingNames']->value;?>
"/>
            </form>
            <input type="button" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
" class='btn btn-success save'/>

        </div>

        <form id="updateHomepageForm"
            method="post" ajaxAction="<?php echo ConfigActions::SetHomepage;?>
"
            action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
            <input type="hidden" name="homepage_id" id="homepage_id" />
        </form>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


        <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/configuration.js"),$_smarty_tpl);?>

        <?php echo '<script'; ?>
 type="text/javascript">

            $(document).ready(function () {
                var config = new Configuration();
                config.init();
            });

        <?php echo '</script'; ?>
>
        <div id="wait-box" class="wait-box">
            <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

        </div>
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* smarty_template_function_list_settings_5518742935e7d2280bb2c03_18016053 */
if (!function_exists('smarty_template_function_list_settings_5518742935e7d2280bb2c03_18016053')) {
function smarty_template_function_list_settings_5518742935e7d2280bb2c03_18016053($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value, 'setting');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
?>
            <?php smarty_function_cycle(array('values'=>',row1','assign'=>'rowCss'),$_smarty_tpl);?>

            <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['setting']->value->Name);
?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
                <div class="form-group col-xs-12">
                    <label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="control-label"><?php echo $_smarty_tpl->tpl_vars['setting']->value->Key;?>
</label>
                    <?php if ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::DEFAULT_TIMEZONE) {?>
                        <select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['TimezoneValues']->value,'output'=>$_smarty_tpl->tpl_vars['TimezoneOutput']->value,'selected'=>$_smarty_tpl->tpl_vars['setting']->value->Value),$_smarty_tpl);?>

                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::LANGUAGE) {?>
                        <select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Languages']->value,'key'=>'GetLanguageCode','label'=>'GetDisplayName','selected'=>strtolower($_smarty_tpl->tpl_vars['setting']->value->Value)),$_smarty_tpl);?>

                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::DEFAULT_HOMEPAGE) {?>
                        <label for="default__homepage" class="no-show">Homepage</label>
                        <select id="default__homepage" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['HomepageValues']->value,'output'=>$_smarty_tpl->tpl_vars['HomepageOutput']->value,'selected'=>strtolower($_smarty_tpl->tpl_vars['setting']->value->Value)),$_smarty_tpl);?>

                        </select> <a href="#" id="applyHomepage"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ApplyToCurrentUsers'),$_smarty_tpl);?>
</a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::PLUGIN_AUTHENTICATION) {?>
                        <select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['AuthenticationPluginValues']->value,'output'=>$_smarty_tpl->tpl_vars['AuthenticationPluginValues']->value,'selected'=>$_smarty_tpl->tpl_vars['setting']->value->Value),$_smarty_tpl);?>

                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::PLUGIN_AUTHORIZATION) {?>
                        <select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['AuthorizationPluginValues']->value,'output'=>$_smarty_tpl->tpl_vars['AuthorizationPluginValues']->value,'selected'=>$_smarty_tpl->tpl_vars['setting']->value->Value),$_smarty_tpl);?>

                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::PLUGIN_PERMISSION) {?>
                        <select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['PermissionPluginValues']->value,'output'=>$_smarty_tpl->tpl_vars['PermissionPluginValues']->value,'selected'=>$_smarty_tpl->tpl_vars['setting']->value->Value),$_smarty_tpl);?>

                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::PLUGIN_POSTREGISTRATION) {?>
                        <select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['PostRegistrationPluginValues']->value,'output'=>$_smarty_tpl->tpl_vars['PostRegistrationPluginValues']->value,'selected'=>$_smarty_tpl->tpl_vars['setting']->value->Value),$_smarty_tpl);?>

                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::PLUGIN_PRERESERVATION) {?>
                        <select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['PreReservationPluginValues']->value,'output'=>$_smarty_tpl->tpl_vars['PreReservationPluginValues']->value,'selected'=>$_smarty_tpl->tpl_vars['setting']->value->Value),$_smarty_tpl);?>

                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Key == ConfigKeys::PLUGIN_POSTRESERVATION) {?>
                        <select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['PostReservationPluginValues']->value,'output'=>$_smarty_tpl->tpl_vars['PostReservationPluginValues']->value,'selected'=>$_smarty_tpl->tpl_vars['setting']->value->Value),$_smarty_tpl);?>

                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->Type == ConfigSettingType::String) {?>
                        <input id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" size="50" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value->Value, ENT_QUOTES, 'UTF-8', true);?>
"
                               class="form-control"/>
                    <?php } else { ?>
                        <div>
                            <div class="radio radio-inline">
                                <input id="radio<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
t" type="radio" value="true"
                                       name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['setting']->value->Value == 'true') {?> checked="checked"<?php }?> />
                                <label for="radio<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
t"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"True"),$_smarty_tpl);?>
</label>
                            </div>
                            <div class="radio radio-inline">
                                <input id="radio<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
f" type="radio" value="false"
                                       name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['setting']->value->Value == 'false') {?> checked="checked"<?php }?> />
                                <label for="radio<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
f"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"False"),$_smarty_tpl);?>
</label>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php
}}
/*/ smarty_template_function_list_settings_5518742935e7d2280bb2c03_18016053 */
}
