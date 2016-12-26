<?php include("partials/head.php"); ?>
<hr>
<ul>
  <?php foreach ($tasks as $task) : ?>
    <li>

      <?php if(!$task->completed) : ?>
        <?= $task->description; continue; ?>
      <?php endif; ?>

      <strike><?= $task->description; ?></strike>

    </li>
  <?php endforeach; ?>
</ul>
<?php require("partials/footer.php"); ?>
