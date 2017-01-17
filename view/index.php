<!DOCTYPE html>
<html>
	<head>
		<title>PHP revisions</title>
		<style>
			header{
				background: #e3e3e3;
				padding: 2em;
				text-align: center;
			}
		</style>
	</head>
	<body>
	<header>
		<h1><?= $greetings; ?></h1>
	</header>
	<article>
		<ul>
			<?php foreach ($names as $name): ?>
				<li><?= $name; ?></li>
			<?php endforeach; ?>
		</ul>
	</article>
	</body>
</html>

