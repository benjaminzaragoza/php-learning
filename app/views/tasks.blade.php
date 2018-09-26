
<!--
<ul>
-->
<?php require 'partials/header.blade.php' ?>

<v-card>
    <v-toolbar color="green" dark>
        <v-toolbar-side-icon></v-toolbar-side-icon>

        <v-toolbar-title>Tasques</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>
    </v-toolbar>

    <v-list two-line>
        <v-subheader>
            Tasques
        </v-subheader>

        <v-divider></v-divider>

        <?php foreach ($tasks as $task) : ?>
        <v-list-tile>

            <v-list-tile-avatar>
                <img src="https://hangla.vn/images/product/product_category_s1081.png?ver=13.3.3">
            </v-list-tile-avatar>

            <v-list-tile-content>
                <v-list-tile-title>
                    <?= $task->name; ?>
                </v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <?php endforeach;?>

    </v-list>
</v-card>

<?php require 'partials/footer.blade.php' ?>
