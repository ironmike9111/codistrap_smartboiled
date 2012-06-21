{config_load file='default.conf'}
{include file="partials/header.tpl"}

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

{include file="partials/header_tag.tpl"}
{include file="partials/nav.tpl"}

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

{include file="partials/footer_tag.tpl"}

</div> <!-- /container -->

{include file="partials/footer.tpl"}
