<?php /* Smarty version Smarty-3.1.10, created on 2012-06-27 16:56:30
         compiled from "application\views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198844feb3b3e7eac25-76374499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b1fb65e675421b1e1ad9cea05f7ab607d00f5e' => 
    array (
      0 => 'application\\views\\home.tpl',
      1 => 1340314075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198844feb3b3e7eac25-76374499',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4feb3b3ea99029_69260621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4feb3b3ea99029_69260621')) {function content_4feb3b3ea99029_69260621($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('default.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<?php echo $_smarty_tpl->getSubTemplate ("partials/header_tag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("partials/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>CodiStrap SmartBoiled!</h1>
        <p>This is a package combining Codeigniter 2.1.1, Smarty 3.1.10, Boostrap 2.04 and 
		Boilerplate 3.0.<br />You could always do it yourself but this is a very nice place to start.
		BIG smiley face...</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Configuration</h2> 
		   <p>Smarty is located in:</p> 
		   <p><b>siteroot/application/third_party/Smarty</b>.</p>
		   <p>Change it's setup via:</p>
		   <p><b>siteroot/application/config/smarty.php</b>.</p>
		   <p>CI autoloads libraries <b>"parser"</b> and <b>"smarty"</b>  in:</p>
		   <p><b>siteroot/application/libraries/MY_parser.php</b><br />
		   <b>siteroot/spplication/libraries/smarty.php</b>.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Creating Pages</h2>
           <p>Create a controller, build $data variable and use:</p>
		   <p><b>$this->parser->parse('example.tpl',$data);</b></p>
		   <p>to render out views. Nice!</p>
		   <p>See <b>home.php</b> in <b>controllers</b> for an example.</p>
		   <p>Templates are in <b>siteroot/application/views</b>. Change them anyway you like.</p>
		   <p>CSS, JS and images are in <b>siteroot/resources/</b>.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Updating</h2>
          <p>In theory this should be easy. Just copy and paste what's new to where you need it.</p> 
		  <p>Just remember to set the auto loading libraries again if you update CI.</p>
		  <p>It's really as vanilla as it get's. Happy coding!</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

<?php echo $_smarty_tpl->getSubTemplate ("partials/footer_tag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ("partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>