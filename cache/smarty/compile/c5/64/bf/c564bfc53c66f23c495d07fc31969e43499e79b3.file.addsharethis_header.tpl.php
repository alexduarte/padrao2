<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 01:55:07
         compiled from "C:\wamp\www\padrao2\modules\addsharethis\addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2527453d86c9b4832f5-73372803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c564bfc53c66f23c495d07fc31969e43499e79b3' => 
    array (
      0 => 'C:\\wamp\\www\\padrao2\\modules\\addsharethis\\addsharethis_header.tpl',
      1 => 1406663197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2527453d86c9b4832f5-73372803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d86c9b4d53f0_24092652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d86c9b4d53f0_24092652')) {function content_53d86c9b4d53f0_24092652($_smarty_tpl) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />

<?php }} ?>