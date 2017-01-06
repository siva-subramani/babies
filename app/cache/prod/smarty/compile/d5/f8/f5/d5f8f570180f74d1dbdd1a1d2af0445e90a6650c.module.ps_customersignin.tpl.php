<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 12:48:58
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:680196586be40aeb4694-81743965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1483465723,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '680196586be40aeb4694-81743965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'logout_url' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586be40aeb8cf6_28749427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be40aeb8cf6_28749427')) {function content_586be40aeb8cf6_28749427($_smarty_tpl) {?><div id="sign_block_top">
  <div class="user-info-selector dropdown js-dropdown">
    <span class="expand-more _gray-darker" data-toggle="dropdown"><i class="material-icons">&#xE7FF;</i></span>
    <ul class="dropdown-menu" aria-labelledby="dLabel">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
	  <li><a
        class="logout"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        rel="nofollow"
      >
        <?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </a></li>
      <li><a
        class="account"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>

      </a></li>
    <?php } else { ?>
      <li><a
        class="login"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </a></li>
    <?php }?>
    </ul>
  </div>
</div>
<?php }} ?>
