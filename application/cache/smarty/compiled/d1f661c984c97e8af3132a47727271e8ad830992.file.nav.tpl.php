<?php /* Smarty version Smarty-3.1.10, created on 2012-06-27 16:56:30
         compiled from "application\views\partials\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252114feb3b3ee34924-54704661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1f661c984c97e8af3132a47727271e8ad830992' => 
    array (
      0 => 'application\\views\\partials\\nav.tpl',
      1 => 1340301246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252114feb3b3ee34924-54704661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4feb3b3ee40081_93028523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4feb3b3ee40081_93028523')) {function content_4feb3b3ee40081_93028523($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#"><?php echo $_smarty_tpl->getConfigVariable('project_name');?>
</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
<?php }} ?>