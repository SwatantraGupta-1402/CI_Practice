<!DOCTYPE html>
<html>
<head>
	<title>Code Igniter Upload Form Tutorials</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php echo $error; ?>
<?php echo form_open_multipart('upload/do_upload'); ?>
<form method="post" action="Upload_Form.php">
</br>
<div class="form-group">
	<input type="file" class="form-control btn-info" name="upload_file" size=""/>
</div>
<div class="form-group">
	<input type="submit" class="btn btn-success" name="submit" value="upload">
</div>
</form>
</body>
</html>
