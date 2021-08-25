<?php
/*
	composer create-project symfony/skeleton pat-pac-processing
	composer require phpoffice/phpspreadsheet
*/

set_time_limit(0);

require_once __DIR__ . '/vendor/autoload.php';
include 'db_connection.php';


include 'out_of_stock.php';

$conn = null;