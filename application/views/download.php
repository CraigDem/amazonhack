<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well">	
      	<a class="btn btn-large btn-info" href="<?= base_url($file_name); ?>">Download</a>
    </div>
    <div class="row-fluid">
		<div class="span2">
	    	<p>Size: <?= $file_size;?> Kb</p>
	    </div>
    </div>
</div>