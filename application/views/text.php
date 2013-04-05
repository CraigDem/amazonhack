<link href="<?= base_url('/css/prettify.css');?>" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?= base_url('/js/prettify.js');?>"></script>

<div class="container">
    <div class="well">
      	<pre class="prettyprint linenums"><?= file_get_contents(base_url('Nmax.java')); ?></pre>
    </div>
    <div class="row-fluid">
    	<div class="span3">
    		<h2>Download as:</h2>
    	</div>
    	<div class="span9 download-buttons">
    		<div class="btn-group dropup pull-right download-button">
			  <button class="btn btn-large btn-info dropdown-toggle" data-toggle="dropdown">
			    Other <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			  	<li><a href="#">FLAC</a></li>
			  	<li><a href="#">MP4 (AAC)</a></li>
			  	<li><a href="#">WMA</a></li>
			  </ul>
	    	</div>
    		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> .rtf</a>
    		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> .txt</a>
    		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Native</a>
    		<a href="<?= base_url('Nmax.java');?>" class="btn btn-large btn-info pull-right"><i class="icon-white icon-download"></i> Raw</a>
    		
    	</div>
    </div>
</div>