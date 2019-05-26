<?php
    function autoloader($pClassName) {
        include(__DIR__ . "/" . $pClassName . ".php");
    }
    spl_autoload_register("autoloader");
