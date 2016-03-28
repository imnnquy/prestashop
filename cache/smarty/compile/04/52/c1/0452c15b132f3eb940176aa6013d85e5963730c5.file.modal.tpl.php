<?php /* Smarty version Smarty-3.1.19, created on 2016-03-27 04:10:56
         compiled from "/Applications/MAMP/htdocs/prestashop/admin14419xrn9/themes/default/template/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172362325156f79590f2a263-16727719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0452c15b132f3eb940176aa6013d85e5963730c5' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin14419xrn9/themes/default/template/modal.tpl',
      1 => 1459054791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172362325156f79590f2a263-16727719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modal_id' => 0,
    'modal_class' => 0,
    'modal_title' => 0,
    'modal_content' => 0,
    'modal_actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f79591017d53_00746992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f79591017d53_00746992')) {function content_56f79591017d53_00746992($_smarty_tpl) {?>
<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['modal_id']->value;?>
" tabindex="-1">
	<div class="modal-dialog <?php if (isset($_smarty_tpl->tpl_vars['modal_class']->value)) {?><?php echo $_smarty_tpl->tpl_vars['modal_class']->value;?>
<?php }?>">
		<div class="modal-content">
			<?php if (isset($_smarty_tpl->tpl_vars['modal_title']->value)) {?>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['modal_title']->value;?>
</h4>
			</div>
			<?php }?>

			<?php echo $_smarty_tpl->tpl_vars['modal_content']->value;?>


			<?php if (isset($_smarty_tpl->tpl_vars['modal_actions']->value)) {?>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close'),$_smarty_tpl);?>
</button>
				<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modal_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['action']->value['type']=='link') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['action']->value['href'];?>
" class="btn <?php echo $_smarty_tpl->tpl_vars['action']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>
</a>
					<?php } elseif ($_smarty_tpl->tpl_vars['action']->value['type']=='button') {?>
						<button type="button" value="<?php echo $_smarty_tpl->tpl_vars['action']->value['value'];?>
" class="btn <?php echo $_smarty_tpl->tpl_vars['action']->value['class'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

						</button>
					<?php }?>
				<?php } ?>
			</div>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
