<?php
/* Smarty version 3.1.30, created on 2020-03-26 20:41:59
  from "/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Configuration/change_theme.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d1397bf4298_52210253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2952b48d05f163be482c861c93b508e375a72b1f' => 
    array (
      0 => '/home/xebloxvgfx88/public_html/yanbal/tpl/Admin/Configuration/change_theme.tpl',
      1 => 1585241515,
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
function content_5e7d1397bf4298_52210253 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-change-theme" class="admin-page">
    <div class="default-box col-xs-12 col-sm-8 col-sm-offset-2">

        <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LookAndFeel'),$_smarty_tpl);?>
</h1>

        <div id="successMessage" class="alert alert-success hidden">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThemeUploadSuccess'),$_smarty_tpl);?>

        </div>

        <form id="elementForm" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" ajaxAction="update" method="post"
              enctype="multipart/form-data">
            <div class="validationSummary alert alert-danger no-show" id="validationErrors">
                <ul>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"logoFileExt"),$_smarty_tpl);?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"cssFileExt"),$_smarty_tpl);?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"faviconFileExt"),$_smarty_tpl);?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"logoFile"),$_smarty_tpl);?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"cssFile"),$_smarty_tpl);?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"faviconFile"),$_smarty_tpl);?>

                </ul>
            </div>

            <div>
                <h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Logo"),$_smarty_tpl);?>
 (*.png, *.gif, *.jpg - 50px height)</h4>

                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
</a>
                    <a href="#" id="removeLogo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Remove'),$_smarty_tpl);?>
</a>
                </div>
                <label for="logoFile" class="no-show">Logo File</label>
                <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'LOGO_FILE'),$_smarty_tpl);?>
 class="pull-left" id="logoFile"/>

                <a href="#" class="clearInput inline"><span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
</a>
            </div>

            <div>
                <h4>Favicon (*.ico, *.png, *.gif, *.jpg - 32px x 32px or 16px x 16px)</h4>

                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['FaviconUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['FaviconUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FaviconUrl']->value;?>
</a>
                    <a href="#" id="removeFavicon"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Remove'),$_smarty_tpl);?>
</a>
                </div>
                <label for="faviconFile" class="no-show">Favicon File</label>
                <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'FAVICON_FILE'),$_smarty_tpl);?>
 class="pull-left" id="faviconFile"/>

                <a href="#" class="clearInput inline"><span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
</a>
            </div>

            <div>
                <div>
                    <h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"CssFile"),$_smarty_tpl);?>
 (*.css)</h4>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
</a>
                </div>
                <label for="cssFile" class="no-show">CSS File</label>
                <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CSS_FILE'),$_smarty_tpl);?>
 class="pull-left" id="cssFile"/>
                <a href="#" class="clearInput"><span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
</a>
            </div>

            <div class="clearfix"></div>

            <button type="button" class="btn btn-success update margin-top-25" name="<?php echo Actions::SAVE;?>
" id="saveButton">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

            </button>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


        </form>

    </div>

    <div id="wait-box" class="wait-box">
        <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/ajaxfileupload.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-form-submit.js"),$_smarty_tpl);?>


    <?php echo '<script'; ?>
 type="text/javascript">
        $('document').ready(function () {

            $('#elementForm').bindAjaxSubmit($('#saveButton'), $('#successMessage'), $('#wait-box'));

            $('.clearInput').click(function (e) {
                e.preventDefault();
                $(this).prev('input').val('');
            });

            $('#removeLogo').click(function (e) {
                e.preventDefault();

                PerformAsyncAction($(this), function () {
                    return '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=removeLogo';
                });
            });

            $('#removeFavicon').click(function (e) {
                e.preventDefault();

                PerformAsyncAction($(this), function () {
                    return '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=removeFavicon';
                });
            });
        });

    <?php echo '</script'; ?>
>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
