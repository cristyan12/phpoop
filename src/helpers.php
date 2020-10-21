<?php

if (! function_exists('show')) {
    function show(string $message): void {
        echo "<p>$message</p>";
    }
}