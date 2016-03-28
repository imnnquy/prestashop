<?php /*%%SmartyHeaderCode:114824566556f7960b36e5d2-22964180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe4a58b231f5da7b01178efb810dfc34c0baddaa' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1459054792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114824566556f7960b36e5d2-22964180',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f7960b98e5f5_29202694',
  'has_nocache_code' => true,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f7960b98e5f5_29202694')) {function content_56f7960b98e5f5_29202694($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Information</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost:8888/prestashop/prices-drop" title="Specials">
						Specials
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/prestashop/new-products" title="New products">
					New products
				</a>
			</li>
										<li class="item">
					<a href="http://localhost:8888/prestashop/best-sales" title="Best sellers">
						Best sellers
					</a>
				</li>
										<li class="item">
					<a href="http://localhost:8888/prestashop/stores" title="Our stores">
						Our stores
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/prestashop/contact-us" title="Contact us">
					Contact us
				</a>
			</li>
															<li class="item">
						<a href="http://localhost:8888/prestashop/content/3-terms-and-conditions-of-use" title="Terms and conditions of use">
							Terms and conditions of use
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8888/prestashop/content/4-about-us" title="About us">
							About us
						</a>
					</li>
													<li>
				<a href="http://localhost:8888/prestashop/sitemap" title="Sitemap">
					Sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
