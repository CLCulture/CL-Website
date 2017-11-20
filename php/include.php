<?php
spl_autoload_register(function ($_className) {
    include 'php/' . $_className . '.php';
});
?>