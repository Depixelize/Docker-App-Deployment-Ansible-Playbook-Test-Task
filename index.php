<?php

$hostname = gethostname();
$start_time = microtime(true);

$sleep_time = rand(1, 4);
sleep($sleep_time);

$end_time = microtime(true);
$execution_time = $end_time - $start_time;

echo "Hostname: $hostname\n";
echo "Execution time: $execution_time\n";