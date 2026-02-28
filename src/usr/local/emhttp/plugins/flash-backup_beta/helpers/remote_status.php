<?php
header('Content-Type: application/json');

$lock = '/tmp/flash-backup_beta/lock.txt';

echo json_encode([
  'running' => file_exists($lock)
]);
