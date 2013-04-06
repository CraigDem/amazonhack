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
			<a href="<?= base_url($file_name); ?>" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Native</a>
			<h2 class="pull-right download-label" style="display:block-inline;">Download as:</h2>		
		</div>
    </div>
</div>