<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 01:55:09
         compiled from "C:\wamp\www\padrao2\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1593553d86c9dae3de3-98272902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ea16bd5d450e2f8b2be77bf5f3cc688332c42b' => 
    array (
      0 => 'C:\\wamp\\www\\padrao2\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1406663514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1593553d86c9dae3de3-98272902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d86c9db1a939_83072401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d86c9db1a939_83072401')) {function content_53d86c9db1a939_83072401($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>