<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 01:54:22
         compiled from "C:\wamp\www\padrao2\admin6340\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1117053d86c6e198d21-81240918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd1e3a964041a187ed18445de8fac460ba2c64c3' => 
    array (
      0 => 'C:\\wamp\\www\\padrao2\\admin6340\\themes\\default\\template\\content.tpl',
      1 => 1406028791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1117053d86c6e198d21-81240918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d86c6e1bfe60_19628460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d86c6e1bfe60_19628460')) {function content_53d86c6e1bfe60_19628460($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>