<?php
require_once(__DIR__ . '/../includes/loader.php');
require_once(__DIR__ . '/setup_functions.php');
global $connection;

$connection->executeStatement(file_get_contents(__DIR__ . '/../sql/initial_table_setup.sql'), [], true);
$connection->executeStatement(file_get_contents(__DIR__ . '/../sql/initial_table_values.sql'), [], true);
