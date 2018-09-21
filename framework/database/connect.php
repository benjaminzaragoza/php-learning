<?php

function connect() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XZvcnv9GqJ3DXLXl');
    } catch (\PDOException $e) {
        die('Could not connect: ' . $e);
    }
}