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
    	<div class="span2">
    		<h2>Size: <?= $file_size;?> Kb</h2>
    	</div>
		<div class="span9 download-buttons pull-right">
			<a href="<?= base_url($file_name); ?>" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Download</a>		
		</div>
    </div>
</div>