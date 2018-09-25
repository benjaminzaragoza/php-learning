<?php require  'partials/header.blade.php'; ?>

<body>
<!--
<ul>
-->

<ul>
    <?php foreach ($people as $person) : ?>
    <li>
        <?php if ($person->viu_mort== true): ?>
        <strike>
            <?php endif; ?>
            <?= $person->nom; ?>
            <?= $person->anys; ?>
            <?= $person->viu_mort; ?>
            <?php if ($person->viu_mort == true): ?>
        </strike>
        <?php endif; ?>
    </li>
    <?php endforeach;?>
</ul>
<?php require  'partials/footer.blade.php'; ?>
