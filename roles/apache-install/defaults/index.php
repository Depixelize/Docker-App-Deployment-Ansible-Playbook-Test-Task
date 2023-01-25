<?php

$start_time = microtime(true);

$sleep_time = rand(1, 4);
sleep($sleep_time);

$end_time = microtime(true);
$execution_time = $end_time - $start_time;

$hostname = $_SERVER['HTTP_X_FORWARDED_HOST'];

$php_version = phpversion();

echo "Host: $hostname\n";
echo "Execution time: $execution_time\n";
echo "PHP Version: $php_version\n";