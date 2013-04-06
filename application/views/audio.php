<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well">
    	<audio controls>
	    	<!--<source src="horse.ogg" type="audio/ogg">-->
	    	<source src="<?= base_url('testmusic.mp3');?>" type="audio/mpeg">
	    	Your browser does not support the audio element, Download instead.
	    </audio>
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
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> OGG</a>
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> MP4</a>
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Native</a>
		<h2 class="pull-right download-label" style="display:block-inline;">Download as:</h2>		
	</div>
</div>