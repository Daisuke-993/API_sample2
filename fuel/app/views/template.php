<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php echo Asset::js('script.js'); ?>
</head>
<body>
	<h1>Weather</h1>
		<div class="col-md-12">
			<?php echo $content; ?>
		</div>
	</div>
</body>
</html>
