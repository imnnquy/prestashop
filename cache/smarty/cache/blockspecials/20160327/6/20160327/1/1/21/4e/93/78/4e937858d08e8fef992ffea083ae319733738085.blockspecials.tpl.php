<?php /*%%SmartyHeaderCode:109834424456f7960b5fd454-77977484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e937858d08e8fef992ffea083ae319733738085' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockspecials/blockspecials.tpl',
      1 => 1459054792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109834424456f7960b5fd454-77977484',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f7960b6a0807_64659162',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f7960b6a0807_64659162')) {function content_56f7960b6a0807_64659162($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost:8888/prestashop/prices-drop" title="Specials">
            Specials
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost:8888/prestashop/summer-dresses/5-printed-summer-dress.html">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost:8888/prestashop/12-small_default/printed-summer-dress.jpg" 
                    alt="" 
                    title="Printed Summer Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost:8888/prestashop/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress">
                            Printed Summer Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Long printed dress with thin...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                $28.98
                                                            </span>
                                                                                                                                 <span class="price-percent-reduction">-5%</span>
                                                                                         <span class="old-price">
                                $30.51
                                                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost:8888/prestashop/prices-drop" 
            title="All specials">
                <span>All specials<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
