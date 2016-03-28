<?php /* Smarty version Smarty-3.1.19, created on 2016-03-27 04:10:57
         compiled from "/Applications/MAMP/htdocs/prestashop/admin14419xrn9/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164977577656f7959101cbd1-01889073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25f3851e9fca29e455729e2fff19f5b817d833a8' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin14419xrn9/themes/default/template/content.tpl',
      1 => 1459054791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164977577656f7959101cbd1-01889073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f79591024cb5_35573972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f79591024cb5_35573972')) {function content_56f79591024cb5_35573972($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
