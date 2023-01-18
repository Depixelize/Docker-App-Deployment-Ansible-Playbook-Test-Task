<?php

$start_time = microtime(true);

$sleep_time = rand(1, 4);
sleep($sleep_time);

$end_time = microtime(true);
$execution_time = $end_time - $start_time;

$url = parse_url($_SERVER['HTTP_HOST']);
$hostname = $url['host'];

$php_version = phpversion();

echo "Host: $hostname\n";
echo "Execution time: $execution_time\n";
echo "PHP Version: $php_version\n";