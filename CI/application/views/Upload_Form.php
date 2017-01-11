<!DOCTYPE html>
<html>
<head>
	<title>Code Igniter Upload Form</title>
</head>
<body>
<?php echo $error; ?>
<?php echo form_open_multipart('upload/do_upload'); ?>
<form method="" action="">
	<input type="file" name="upload_file" size="20"/>
	<input type="submit" name="submit" value="upload">
</form>
</body>
</html>