<?php

require_once 'DayNine.php';

$solver = new DayNine();
$aStart = floor(microtime(true) * 1000);
$solver->solveA();
$aEnd = $milliseconds = floor(microtime(true) * 1000);
echo " runtime: " . ($aEnd - $aStart) . " ms\n";

$bStart = floor(microtime(true) * 1000);
$solver->solveB();
$bEnd = $milliseconds = floor(microtime(true) * 1000);
echo " runtime: " . ($bEnd - $bStart) . " ms\n";