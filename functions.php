<?php
if (!function_exists('hello')) {
    function hello($who = 'Mon') {
        echo 'Hola ' . $who;
    }
}