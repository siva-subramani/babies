<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 12:48:59
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:969453625586be40b0ce3d2-34506219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1483465723,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '969453625586be40b0ce3d2-34506219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586be40b0d0454_46076970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be40b0d0454_46076970')) {function content_586be40b0d0454_46076970($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top">
  <div id="search_widget" class="" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="content">
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<span id="clear-icon"><i class="material-icons">&#xe14c;</i></span>
			<input type="hidden" name="controller" value="search">
			<input id="search_query_top" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
			<button type="submit">
				<i class="material-icons search">&#xE8B6;</i>
			</button>
		</form>
    </div>
  </div>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
