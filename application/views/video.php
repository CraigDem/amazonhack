<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well">
    	<video controls width="100%" height="auto">
    		<source src="<?= base_url($file_name);?>"</source>
    	</video> 
    </div>
    <div class="row-fluid">
    	<div class="span9">
    		<p>Filename: <?= $title; ?> &emsp; Size: <?php if ($file_size > 1024) { echo (round($file_size / 1024, 2)) . "Mb"; } else { echo $file_size . "Kb"; }?></p>
    	</div>
		<div class="span3 download-buttons pull-right">
			<a href="<?= base_url($file_name); ?>" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Download</a>		
		</div>
    </div>
</div>