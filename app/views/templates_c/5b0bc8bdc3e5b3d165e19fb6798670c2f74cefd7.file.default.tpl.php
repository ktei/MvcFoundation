<?php /* Smarty version Smarty-3.1.13, created on 2013-05-21 07:57:06
         compiled from ".\app\views\templates\layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3380519b28d2212386-85258270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b0bc8bdc3e5b3d165e19fb6798670c2f74cefd7' => 
    array (
      0 => '.\\app\\views\\templates\\layouts\\default.tpl',
      1 => 1369120219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3380519b28d2212386-85258270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519b28d221aa35_72595122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519b28d221aa35_72595122')) {function content_519b28d221aa35_72595122($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>MvcFoundation</title>
    </head>

    <body>
        
        <?php echo $_smarty_tpl->getSubTemplate ("pages/".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    </body>
</html>
<?php }} ?>