<?php /* Smarty version Smarty-3.1.7, created on 2015-01-04 07:16:26
         compiled from "C:\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\TagCloudContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1662554a8e8cabc9642-61637479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09254c975d4d7a33f0c139e36667401fddc97e44' => 
    array (
      0 => 'C:\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\TagCloudContents.tpl',
      1 => 1373768344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1662554a8e8cabc9642-61637479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAGS' => 0,
    'TAG_ID' => 0,
    'TAG_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54a8e8cac01de',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a8e8cac01de')) {function content_54a8e8cac01de($_smarty_tpl) {?>
<div class="tagsContainer" id="tagCloud"><?php  $_smarty_tpl->tpl_vars['TAG_ID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAG_ID']->_loop = false;
 $_smarty_tpl->tpl_vars['TAG_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGS']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAG_ID']->key => $_smarty_tpl->tpl_vars['TAG_ID']->value){
$_smarty_tpl->tpl_vars['TAG_ID']->_loop = true;
 $_smarty_tpl->tpl_vars['TAG_NAME']->value = $_smarty_tpl->tpl_vars['TAG_ID']->key;
?><a class="tagName cursorPointer" data-tagid="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['TAGS']->value[0][$_smarty_tpl->tpl_vars['TAG_NAME']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_NAME']->value;?>
</a>&nbsp;<?php } ?></div>	<?php }} ?>