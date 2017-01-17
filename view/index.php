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
			<?php
				foreach ($names as $name) {
					echo "<li>$name</li>";
				}
			?>
		</ul>
	</article>
	</body>
</html>

