<?php /*%%SmartyHeaderCode:150180245556f7960b2df657-23278898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aae44ef77fa33227e9484e2ae4b86188b709144c' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockcategories/blockcategories.tpl',
      1 => 1459054792,
      2 => 'file',
    ),
    'be28f1eb8a174c4d97b0534b7603d5d165962061' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockcategories/category-tree-branch.tpl',
      1 => 1459054792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150180245556f7960b2df657-23278898',
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f7960b351871_64459162',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f7960b351871_64459162')) {function content_56f7960b351871_64459162($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h2 class="title_block">
					Categories
			</h2>
	<div class="block_content">
		<ul class="tree dhtml">
												
<li class="last">
	<a 
	href="http://localhost:8888/prestashop/3-women" title="You will find here all woman fashion collections.  
 This category includes all the basics of your wardrobe and much more: 
 shoes, accessories, printed t-shirts, feminine dresses, women&#039;s jeans!">
		Women
	</a>
			<ul>
												
<li >
	<a 
	href="http://localhost:8888/prestashop/4-tops" title="Choose from t-shirts, tops, blouses, short sleeves, long sleeves, tank tops, 3/4 sleeves and more. 
 Find the cut that suits you the best!">
		Tops
	</a>
			<ul>
												
<li >
	<a 
	href="http://localhost:8888/prestashop/5-tshirts" title="The must have of your wardrobe, take a look at our different colors, 
 shapes and style of our collection!">
		T-shirts
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://localhost:8888/prestashop/7-blouses" title="Match your favorites blouses with the right accessories for the perfect look.">
		Blouses
	</a>
	</li>

									</ul>
	</li>

																
<li class="last">
	<a 
	href="http://localhost:8888/prestashop/8-dresses" title="Find your favorites dresses from our wide choice of evening, casual or summer dresses! 
 We offer dresses for every day, every style and every occasion.">
		Dresses
	</a>
			<ul>
												
<li >
	<a 
	href="http://localhost:8888/prestashop/9-casual-dresses" title="You are looking for a dress for every day? Take a look at 
 our selection of dresses to find one that suits you.">
		Casual Dresses
	</a>
	</li>

																
<li >
	<a 
	href="http://localhost:8888/prestashop/10-evening-dresses" title="Browse our different dresses to choose the perfect dress for an unforgettable evening!">
		Evening Dresses
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://localhost:8888/prestashop/11-summer-dresses" title="Short dress, long dress, silk dress, printed dress, you will find the perfect dress for summer.">
		Summer Dresses
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</li>

									</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>
