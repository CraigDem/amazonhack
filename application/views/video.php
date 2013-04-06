<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well">
    	<video controls width="100%" height="auto">
    		<source src="<?= base_url('testvideo1');?>"</source>
    	</video>
    </div>
	<div class="span9 download-buttons pull-right">
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> FLV</a>
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> OGG</a>
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> MP4</a>
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Native</a>
		<h2 class="pull-right download-label" style="display:block-inline;">Download as:</h2>		
	</div>
</div>