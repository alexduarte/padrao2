<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 01:37:37
         compiled from "C:\wamp\www\prestashop\modules\addsharethis\addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:476553d8688158b800-91258260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec6fb3add84ab4d120c27ab572dfc488f74b63d' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\addsharethis\\addsharethis_header.tpl',
      1 => 1406663197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '476553d8688158b800-91258260',
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
  'unifunc' => 'content_53d868815e5583_89339648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d868815e5583_89339648')) {function content_53d868815e5583_89339648($_smarty_tpl) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />

<?php }} ?>