<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well well-fix">
    	<audio controls>
	    	<source src="<?= $file_url; ?>">
	    	Your browser does not support the audio element, Download instead.
	    </audio>
	</div>
	<div class="row-fluid">
		<div class="span9">
    		<p>Filename: <?= $title; ?> &emsp; Size: <?php if ($file_size > 1024) { echo (round($file_size / 1024, 2)) . "Mb"; } else { echo $file_size . "Kb"; }?></p>
    	</div>
		<div class="span3 download-buttons pull-right">
			<a class="btn btn-large btn-info pull-right" href="<?= $file_url; ?>">Download</a>
		</div>
	</div>
</div>