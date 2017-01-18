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
				<li><strong>Name:</strong> <?= $task['title']; ?></li>
				<li><strong>Due: </strong> : <?= $task['due']; ?></li>
				<li><strong>Responsible: </strong> : <?= $task['assigned_to']; ?></li>
				<li><strong>Completed</strong> : <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?></li>
		</ul>
	</article>
	</body>
</html>

