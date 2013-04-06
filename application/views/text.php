<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=default"></script>

<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well">	
      	<pre class="pre-scrollable prettyprint linenums"><?= file_get_contents('.'.$file_name); ?></pre>
    </div>
    <div class="row-fluid">
		<div class="span2">
	    		<p>Size: <?= $file_size;?> Kb</p>
	    	</div>
	    <div class="span9 download-buttons pull-right">
			<div class="btn-group dropup pull-right download-button">
			  <button class="btn btn-large btn-info dropdown-toggle" data-toggle="dropdown">
			    Other <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			  	<li><a href="#">AVI</a></li>
			  	<li><a href="#">FLV</a></li>
			  	<li><a href="#">M4V</a></li>
			  </ul>
	    	</div>
			<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> RTF</a>
			<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> TXT</a>
			<a href="<?= $file; ?>" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Native</a>
			<h2 class="pull-right download-label" style="display:block-inline;">Download as:</h2>		
		</div>
    </div>
</div>