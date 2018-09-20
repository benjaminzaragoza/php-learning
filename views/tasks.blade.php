<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasques</title>
</head>
<body>
<!--
<ul>
<?php
foreach ($tasks as $task) {
    echo "<li>$task</li>";
}
?>
</ul>
-->
<ul>
    <?php foreach ($tasks as $task) : ?>
    <li><?= $task; ?></li>
    <?php endforeach;?>

</ul>

<hr>
<h1>Taks</h1>
<p>les meves tasques pendets son</p>
<ul>
    <li>compra pa</li>
    <li>compra llet</li>
    <li>practicar php</li>
    <li><strike>practicar git</strike></li>
    <li><strike>blasb asdas</strike></li>
</ul>

</body>
</html>