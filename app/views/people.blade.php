<?php require 'partials/header.blade.php'; ?>

<body>
<!--
<ul>
-->
<!--
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
-->
<v-card>
    <v-toolbar color="purple" dark>
        <v-toolbar-side-icon></v-toolbar-side-icon>

        <v-toolbar-title>Persones</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>
    </v-toolbar>

    <v-list two-line>
        <v-subheader>
            Persones
        </v-subheader>

        <v-divider></v-divider>

        <?php foreach ($people as $person) : ?>

        <v-list-tile>

            <v-list-tile-avatar>
                <img src="https://png.icons8.com/color/1600/person-male.png">
            </v-list-tile-avatar>

            <v-list-tile-content>
                <v-list-tile-title>
                    Nom: <?= $person->nom; ?>
                </v-list-tile-title>
                <v-list-tile-title>
                    Edat: <?= $person->anys; ?>
                </v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <?php endforeach;?>

    </v-list>
</v-card>
<?php require 'partials/footer.blade.php'; ?>

