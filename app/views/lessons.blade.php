<?php require 'partials/header.blade.php'; ?>

<v-card>
    <v-toolbar color="red" dark>
        <v-toolbar-side-icon></v-toolbar-side-icon>

        <v-toolbar-title>Lessons</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>
    </v-toolbar>

    <v-list two-line>
        <v-subheader>
            Lessons
        </v-subheader>

        <v-divider></v-divider>

        <?php foreach ($lessons as $lesson) : ?>

        <v-list-tile>

            <v-list-tile-avatar>
                <img src="https://exoffender.org/wp-content/uploads/2017/09/education-icon.png">
            </v-list-tile-avatar>

            <v-list-tile-content>
                <v-list-tile-title>
                    <?= $lesson->nom; ?>
                </v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <?php endforeach;?>

    </v-list>
</v-card>
<?php require 'partials/footer.blade.php'; ?>
