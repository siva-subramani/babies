<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 14:44:37
         compiled from "/var/www/html/themes/lava0133/templates/catalog/_partials/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1771648376586bff250b6a97-68595065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84d02d26ff4089fa453de1fba55d6cbabcd256d8' => 
    array (
      0 => '/var/www/html/themes/lava0133/templates/catalog/_partials/products.tpl',
      1 => 1483465723,
      2 => 'file',
    ),
    '08ea22350cbb73c71f3a3eca1019371d50ddd517' => 
    array (
      0 => '/var/www/html/themes/lava0133/templates/catalog/_partials/variant-links.tpl',
      1 => 1483465723,
      2 => 'file',
    ),
    '8cd05645277f8f65702ce8c7a3f28a0c97f75ef8' => 
    array (
      0 => '/var/www/html/themes/lava0133/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1483465723,
      2 => 'file',
    ),
    '05f12fbcc5e77e6af063b2ac909e68b9c74e77dd' => 
    array (
      0 => '/var/www/html/themes/lava0133/templates/_partials/pagination.tpl',
      1 => 1483465723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1771648376586bff250b6a97-68595065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586bff250f1271_69788970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bff250f1271_69788970')) {function content_586bff250f1271_69788970($_smarty_tpl) {?><div id="js-product-list">
  <ul class="products row">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      
        <?php /*  Call merged included template "catalog/_partials/miniatures/product.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '1771648376586bff250b6a97-68595065');
content_586bff250b8992_56265440($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/product.tpl" */?>
      
    <?php } ?>
  </ul>

  
    <?php /*  Call merged included template "_partials/pagination.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, '1771648376586bff250b6a97-68595065');
content_586bff250e09f9_15908052($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/pagination.tpl" */?>
  

  <div class="hidden-md-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      <?php echo smartyTranslate(array('s'=>'Back to top','d'=>'Shop.Actions'),$_smarty_tpl);?>

      <i class="material-icons">&#xE316;</i>
    </a>
  </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 14:44:37
         compiled from "/var/www/html/themes/lava0133/templates/catalog/_partials/miniatures/product.tpl" */ ?>
<?php if ($_valid && !is_callable('content_586bff250b8992_56265440')) {function content_586bff250b8992_56265440($_smarty_tpl) {?><li class="<?php if (isset($_smarty_tpl->tpl_vars['slider']->value)&&$_smarty_tpl->tpl_vars['slider']->value=='no') {?>cols <?php }?>product-layout js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="product-container thumbnail-container">
    
	<div class="left-block">
	<div class="product-image-container">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
        <img
          class = "img-fluid<?php if (isset($_smarty_tpl->tpl_vars['product']->value['images'])&&count($_smarty_tpl->tpl_vars['product']->value['images'])>1) {?> image-cover<?php }?>"
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
          data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
        >
        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image']!=$_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?>
        <img
          class = "img-fluid image-hover"
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
          data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
        >
        <?php break 1?>
        <?php }?>
        <?php } ?>
      </a>
	</div>
	</div>
    

    <div class="right-block product-description">
      
        <h1 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
</a></h1>
      

      
        <div class="product-description-short" itemprop="description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['description_short'],'html','UTF-8');?>
</div>
      

      
        <div class="product-list-actions">
		  <a
			href="#"
			class="quick-view up"
			data-link-action="quickview"
		  >
			<i class="material-icons search">&#xE8B6;</i> <?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

		  </a>
          
        </div>
      

      
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product-price-and-shipping">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>


              <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
                <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
            <?php }?>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>


            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>


          <?php if (isset($_smarty_tpl->tpl_vars['stamp']->value)&&$_smarty_tpl->tpl_vars['stamp']->value) {?>
            <script type="text/javascript">
            $(document).ready(function(){
                $('#countdown<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
').countdown({
                    timestamp : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stamp']->value, ENT_QUOTES, 'UTF-8');?>
 - (new Date()).getTime()
                });
                $('.countdown-content .Days').html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['text_days'], ENT_QUOTES, 'UTF-8');?>
');
                $('.countdown-content .Hours').html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['text_hours'], ENT_QUOTES, 'UTF-8');?>
');
                $('.countdown-content .Minutes').html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['text_minutes'], ENT_QUOTES, 'UTF-8');?>
');
                $('.countdown-content .Seconds').html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['text_seconds'], ENT_QUOTES, 'UTF-8');?>
');
            });
            </script>
            <div id="countdown<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" class="countdown-content"></div>
          <?php }?>

          </div>
        <?php }?>
      
    </div>
    
      <ul class="product-flags">
        <?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
          <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php } ?>
      </ul>
    
    <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
      
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
          <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '1771648376586bff250b6a97-68595065');
content_586bff250d8997_03558392($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
        <?php }?>
      
    </div>

  </div>
</li>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 14:44:37
         compiled from "/var/www/html/themes/lava0133/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_586bff250d8997_03558392')) {function content_586bff250d8997_03558392($_smarty_tpl) {?><div class="variant-links down">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 14:44:37
         compiled from "/var/www/html/themes/lava0133/templates/_partials/pagination.tpl" */ ?>
<?php if ($_valid && !is_callable('content_586bff250e09f9_15908052')) {function content_586bff250e09f9_15908052($_smarty_tpl) {?><nav class="pagination">
  <div class="col-md-6">
    <?php echo smartyTranslate(array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl);?>

  </div>
  <div class="col-md-6">
    <ul class="page-list clearfix text-xs-center">
      <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
          <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='spacer') {?>
            <span class="spacer">&hellip;</span>
          <?php } else { ?>
            <a
              rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next<?php } else { ?>nofollow<?php }?>"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
              class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next <?php }?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
            >
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>
                <i class="material-icons">&#xE314;</i><?php echo smartyTranslate(array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

              <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>
                <?php echo smartyTranslate(array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
<i class="material-icons">&#xE315;</i>
              <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </a>
          <?php }?>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>
<?php }} ?>
