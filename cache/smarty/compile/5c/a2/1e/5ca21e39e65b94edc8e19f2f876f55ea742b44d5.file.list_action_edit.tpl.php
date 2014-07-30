<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 01:54:30
         compiled from "C:\wamp\www\padrao2\admin6340\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:539653d86c7679d463-94896808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ca21e39e65b94edc8e19f2f876f55ea742b44d5' => 
    array (
      0 => 'C:\\wamp\\www\\padrao2\\admin6340\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1406028793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '539653d86c7679d463-94896808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d86c767c0723_78735926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d86c767c0723_78735926')) {function content_53d86c767c0723_78735926($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>