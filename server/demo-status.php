<?php

header('Content-Type: application/json; charset=utf-8');

$config = [
    'product' => 'Andy-Blaise Agent IA Commercial',
    'edition' => 'DEMO',
    'duration_hours' => 2,
    'status' => 'active',
    'server_controlled' => true
];

echo json_encode(
    $config,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);
