<div class="container">
    <div class="well">
    	<audio controls>
	    	<!--<source src="horse.ogg" type="audio/ogg">-->
	    	<source src="<?= base_url('testmusic.mp3');?>" type="audio/mpeg">
	    	Your browser does not support the audio element, Download instead.
	    </audio>
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
    		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> OGG</a>
    		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> MP3</a>
    		<a href="#" class="btn btn-large btn-info pull-right"><i class="icon-white icon-download"></i> Native</a>
    		
    	</div>
    </div>
</div>