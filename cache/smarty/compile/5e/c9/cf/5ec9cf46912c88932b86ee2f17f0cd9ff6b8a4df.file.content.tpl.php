<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 01:37:28
         compiled from "C:\wamp\www\prestashop\admin6340\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1942953d86878ac7583-80794641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec9cf46912c88932b86ee2f17f0cd9ff6b8a4df' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin6340\\themes\\default\\template\\content.tpl',
      1 => 1406028791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942953d86878ac7583-80794641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d86878aea801_44816748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d86878aea801_44816748')) {function content_53d86878aea801_44816748($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>