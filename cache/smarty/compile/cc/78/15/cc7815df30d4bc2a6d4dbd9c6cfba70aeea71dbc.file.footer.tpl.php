<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 01:37:41
         compiled from "C:\wamp\www\prestashop\themes\theme818\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2740653d86885744e81-05996116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7815df30d4bc2a6d4dbd9c6cfba70aeea71dbc' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme818\\footer.tpl',
      1 => 1406663196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2740653d86885744e81-05996116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'RightColumn' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d86885804508_23410481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d86885804508_23410481')) {function content_53d86885804508_23410481($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&(str_replace(" ",'',$_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value))!=''){?><?php $_smarty_tpl->tpl_vars['RightColumn'] = new Smarty_variable(3, null, 0);?><?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['RightColumn']->value)&&$_smarty_tpl->tpl_vars['RightColumn']->value!=0){?>
				<div id="right_column" class="col-xs-12 col-sm-3 column">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
            <?php }?>
			</div>
            </div>
</div>
<!-- Footer -->
			<div class="page_wrapper_3 clearfix">
                <footer id="footer" class="container">
                <div class="row modules">
                    <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

                     <?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
                        <p class="center clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
                    <?php }?>
                </div>
                   
                </footer>
            </div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>