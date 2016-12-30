<?php
require __DIR__ . '/vendor/autoload.php';

echo "Hello World"; 
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

?>