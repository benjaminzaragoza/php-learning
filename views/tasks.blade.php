
<!--
<ul>
-->
<?php require  'partials/header.blade.php' ?>

<ul>
    <?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed == true): ?>
        <strike>
            <?php endif; ?>
            <?= $task->name; ?>
            <?php if ($task->completed == true): ?>
        </strike>
        <?php endif; ?>
    </li>
    <?php endforeach;?>
</ul>

<v-card>
    <v-toolbar color="indigo" dark>
        <v-toolbar-side-icon></v-toolbar-side-icon>

        <v-toolbar-title>Inbox</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>

        <v-btn icon>
            <v-icon>more_vert</v-icon>
        </v-btn>
    </v-toolbar>
    <v-list>
        <v-list-tile
                v-for="item in items"
                :key="item.title"
                avatar
                @click=""
        >
            <v-list-tile-action>
                <v-icon v-if="item.icon" color="pink">star</v-icon>
            </v-list-tile-action>

            <v-list-tile-content>
                <v-list-tile-title v-text="item.title"></v-list-tile-title>
            </v-list-tile-content>

            <v-list-tile-avatar>
                <img :src="item.avatar">
            </v-list-tile-avatar>
        </v-list-tile>
        <?php endforeach;?>

    </v-list>
</v-card>
<?php require  'partials/footer.blade.php'; ?>
