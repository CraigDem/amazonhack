<script src="<?= base_url('/jwplayer/jwplayer.js');?>"></script>

<div class="container">
    <div class="well">
    	<video controls width="100%" height="auto">
    		<source src="<?= base_url('testvideo.mp4');?>"</source>
    	</video>
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
			  	<li><a href="#">AVI</a></li>
			  	<li><a href="#">FLV</a></li>
			  	<li><a href="#">M4V</a></li>
			  </ul>
	    	</div>
    		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> OGG</a>
    		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> MP4</a>
    		<a href="#" class="btn btn-large btn-info pull-right"><i class="icon-white icon-download"></i> Native</a>
    		
    	</div>
    </div>
</div>