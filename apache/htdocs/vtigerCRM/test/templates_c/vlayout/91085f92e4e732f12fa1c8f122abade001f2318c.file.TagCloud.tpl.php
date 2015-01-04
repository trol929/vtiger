<?php /* Smarty version Smarty-3.1.7, created on 2015-01-04 07:16:26
         compiled from "C:\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\TagCloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15254a8e8caaf5e33-25255075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91085f92e4e732f12fa1c8f122abade001f2318c' => 
    array (
      0 => 'C:\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\TagCloud.tpl',
      1 => 1373768344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15254a8e8caaf5e33-25255075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54a8e8cab96d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a8e8cab96d9')) {function content_54a8e8cab96d9($_smarty_tpl) {?>
<div class="dashboardWidgetHeader"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="dashboardWidgetContent" style='padding:5px'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/TagCloudContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>	 <?php }} ?>