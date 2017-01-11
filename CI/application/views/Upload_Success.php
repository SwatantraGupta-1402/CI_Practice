<!DOCTYPE html>
<html>
<head>
	<title>Code Igniter Upload Form</title>
</head>
<body>
<h3>Your File has been successfully uploaded.</h3>
<ul>
	<?php foreach ($upload_data as $item => $value) ?>
		<li><?php echo $item; ?>:<?php echo $value; ?></li>
	<?phpendforeach; ?>
</ul>
<p><?php echo anchor('upload','Upload Another File!'); ?></p>
</body>
</html>