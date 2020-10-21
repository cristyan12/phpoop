<?php

spl_autoload_register(function (string $className) {
    if (strpos($className, 'Beleriand\\') === 0) {
        $className = str_replace('Beleriand\\', '', $className);

        if (file_exists("src/$className.php")) {
            require "src/$className.php";
        }
    }
});
