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
		<div class="span9">
    		<p>Filename: <?= $title; ?> &emsp; Size: <?php if ($file_size > 1024) { echo (round($file_size / 1024, 2)) . "Mb"; } else { echo $file_size . "Kb"; }?></p>
    	</div>
    </div>
</div>