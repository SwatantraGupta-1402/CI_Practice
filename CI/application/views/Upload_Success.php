<!DOCTYPE html>
<html>
<head>
	<title>Code Igniter Upload Form</title>
</head>
<body>
<h3 style="color:green;">Your File has been successfully uploaded.</h3>
<ul>
	<?php foreach ($upload_data as $item => $value) ?>
		<li><?php echo $item; ?>:&nbsp;&nbsp;&nbsp;<?php echo $value; ?></li>
	<?phpendforeach; ?>
</ul>
<p><?php echo anchor('upload','<b>Upload Another File!</b>'); ?></p>
</body>
</html>
