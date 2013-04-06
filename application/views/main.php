<div class="container-fluid main_uploader">
	<form action="<?= site_url("upload"); ?>" class="logo dropzone" method="POST" enctype="multipart/form-data">
    	<div class="fallback">
	    	<input name="userfile" type="file" />
	    	<input type="submit" />
    	</div>
	</form>
</div>
<style>
	#footer {
		margin-top: -40px;
	}
</style>
<div id="footer">
	<div class="row-fluid">
		<div class="span3 credit-span">
			<a href="login.html"class="muted credit">Login</a>
			<a href="about.html"class="muted credit" style="padding-left:5px;">About us</a>		
		</div>
		<div class="span6">
			<h4 class="muted credit" style="text-align:center;">Drop files above or simply click above to upload</h4>
		</div>
		<div class="span3">
		</div>
	</div>
</div>
