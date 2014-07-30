<?php /*%%SmartyHeaderCode:636853d86c9d72a5c3-32859129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59c02240296cf6b08a6f22a1ba53a3c0081c954e' => 
    array (
      0 => 'C:\\wamp\\www\\padrao2\\themes\\theme818\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1406663197,
      2 => 'file',
    ),
    'fa3eecfb6614c253fecf5c74d41abe21d568d303' => 
    array (
      0 => 'C:\\wamp\\www\\padrao2\\themes\\theme818\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1406663197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '636853d86c9d72a5c3-32859129',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d86c9d945a33_60543699',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d86c9d945a33_60543699')) {function content_53d86c9d945a33_60543699($_smarty_tpl) {?>
<!-- Block categories module -->
<section  id="categories_block_left"  class="column_box block">
	<h4><span>Categorias</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
		<ul class="toggle_content tree dhtml">
									
<li >
	<a href="http://localhost:8080/padrao2/13-decoracao"  title="DECORA&Ccedil;&Atilde;O">DECORA&Ccedil;&Atilde;O</a>
			<ul>
									
<li class="last">
	<a href="http://localhost:8080/padrao2/16-acessorios-decorativos"  title="">ACESS&Oacute;RIOS DECORATIVOS</a>
	</li>

							</ul>
	</li>

												
<li >
	<a href="http://localhost:8080/padrao2/14-cozinha"  title="COZINHA">COZINHA</a>
			<ul>
									
<li class="last">
	<a href="http://localhost:8080/padrao2/17-copa"  title="">COPA</a>
	</li>

							</ul>
	</li>

												
<li class="last">
	<a href="http://localhost:8080/padrao2/15-escritorio"  title="ESCRIT&Oacute;RIO">ESCRIT&Oacute;RIO</a>
			<ul>
									
<li class="last">
	<a href="http://localhost:8080/padrao2/18-atelies"  title="">ATELI&Ecirc;S</a>
	</li>

							</ul>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
</section>
<!-- /Block categories module -->
<?php }} ?>