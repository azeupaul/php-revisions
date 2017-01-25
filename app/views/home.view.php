<?php require 'partials/header.php'; ?>
	<header>
		<h1>Welcome to my revision page</h1>
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
<?php require 'partials/footer.php'; ?>