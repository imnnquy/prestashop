<?php /* Smarty version Smarty-3.1.19, created on 2016-03-27 04:10:57
         compiled from "/Applications/MAMP/htdocs/prestashop/admin14419xrn9/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51358078856f79591130bc6-39925564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '082c2d422e65391f759e28788c18a2308344dbda' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin14419xrn9/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1459054791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51358078856f79591130bc6-39925564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f795911345c8_95753003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f795911345c8_95753003')) {function content_56f795911345c8_95753003($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
