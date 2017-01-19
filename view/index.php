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
			<?php foreach($tasks as $task): ?>
				<?php if($task->isComplete()): ?>
					<li><strike><?= $task->getTitle(); ?></strike></li>
				<?php else: ?>
					<li><?= $task->getTitle(); ?></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</article>
	</body>
</html>

