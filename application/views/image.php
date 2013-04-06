<style>
	body {
		padding-top: 20px;
	}
</style>

<div class="container">
    <div class="well">	
      	<img height="auto" width="auto" src="<?= $file_name;?>" />
    </div>
    <div class="span9 download-buttons pull-right">
		<div class="btn-group dropup pull-right download-button">
		  <button class="btn btn-large btn-info dropdown-toggle" data-toggle="dropdown">
		    Other <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		  	<li><a href="#">Something</a></li>
		  	<li><a href="#">TIFF</a></li>
		  	<li><a href="#">BMP</a></li>
		  </ul>
    	</div>
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> GIF</a>
		<a href="#" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> JPG</a>
		<a href="<?= base_url('/img/nyancat.png'); ?>" class="btn btn-large btn-info pull-right download-button"><i class="icon-white icon-download"></i> Native</a>
		<h2 class="pull-right download-label" style="display:block-inline;">Download as:</h2>		
	</div>
</div>