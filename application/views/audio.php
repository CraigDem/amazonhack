<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well well-fix">
    	<audio controls>
	    	<source src="<?= base_url($file_name); ?>">
	    	Your browser does not support the audio element, Download instead.
	    </audio>
	</div>
	<div class="row-fluid">
		<div class="span2">
	    		<p>Size: <?php if ($file_size > 1024) { echo (round($file_size / 1024, 2)) . "Mb"; } else { echo $file_size . "Kb"; }?></p>
	    	</div>
		<div class="span9 download-buttons pull-right">
			<a class="btn btn-large btn-info pull-right" href="<?= base_url($file_name); ?>">Download</a>
			<h2 class="pull-right download-label" style="display:block-inline;">Download:</h2>		
		</div>
	</div>
</div>