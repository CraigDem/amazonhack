<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well">	
      	<img height="auto" width="auto" src="<?= $file_url;?>" />
    </div>
    <div class="row-fluid">
		<div class="span9">
    		<p>Filename: <?= $title; ?> &emsp; Size: <?php if ($file_size > 1024) { echo (round($file_size / 1024, 2)) . "Mb"; } else { echo $file_size . "Kb"; }?></p>
    	</div>
	    <div class="span3 download-buttons pull-right">
	    	<a href="<?= $file_url; ?>" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Download</a>
		</div>
    </div>
</div>