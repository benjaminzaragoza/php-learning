<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persones</title>
</head>
<body>
<!--
<ul>
    @foreach ($people as $person)
    <li>
    @if ($person->viu_mort == true)
        <strike>
    @endif
        {{ $person->nom }}
    @if ($person->viu_mort == true)
        </strike>
    @endif
            </li>
    @endforeach
        </ul>
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
</body>
</html>