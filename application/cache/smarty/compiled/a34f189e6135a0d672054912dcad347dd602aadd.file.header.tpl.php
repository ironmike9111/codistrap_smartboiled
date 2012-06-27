<?php /* Smarty version Smarty-3.1.10, created on 2012-06-27 16:56:30
         compiled from "application\views\partials\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108694feb3b3ed21cb1-74146038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a34f189e6135a0d672054912dcad347dd602aadd' => 
    array (
      0 => 'application\\views\\partials\\header.tpl',
      1 => 1340310508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108694feb3b3ed21cb1-74146038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'author' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4feb3b3ede40c2_55614369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4feb3b3ede40c2_55614369')) {function content_4feb3b3ede40c2_55614369($_smarty_tpl) {?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->getConfigVariable('project_name');?>
</title>
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
css/style.css">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
favicon.ico">

	<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
apple-touch-icon.png"/>

	<link rel="apple-touch-icon-precomposed" sizes="57x57" 
	href="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
apple-touch-icon-57x57-precomposed.png">

	<link rel="apple-touch-icon-precomposed" sizes="72x72" 
	href="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
apple-touch-icon-72x72-precomposed.png">

	<link rel="apple-touch-icon-precomposed" sizes="114x114" 
	href="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
apple-touch-icon-114x114-precomposed.png">

	<script src="<?php echo $_smarty_tpl->getConfigVariable('resources');?>
js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body><?php }} ?>