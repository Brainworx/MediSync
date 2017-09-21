<?php
require_once 'BackgroundProcess.php';

$process = new BackgroundProcess('product.php');//sleep 5
$process->run();

echo sprintf('Getting products in process %d', $process->getPid());
while ($process->isRunning()) {
	echo '.';
	sleep(1);
}
echo "\nDone.\n";