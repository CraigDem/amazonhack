<script type="text/javascript">
	$(document).ready(function() {
		$('#file-display-container').load("<?= site_url("get_file/get_viewer/$token"); ?>");
	});
</script>

<div id="file-display-container">