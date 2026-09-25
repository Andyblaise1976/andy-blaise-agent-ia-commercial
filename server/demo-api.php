<?php

declare(strict_types=1);

session_start();

header('Content-Type: application/json; charset=utf-8');

$durationSeconds = 2 * 60 * 60;

if (!isset($_SESSION['demo_started_at'])) {
    $_SESSION['demo_started_at'] = time();
}

$startedAt = (int) $_SESSION['demo_started_at'];
$expiresAt = $startedAt + $durationSeconds;
$remaining = max(0, $expiresAt - time());

echo json_encode([
    'success' => true,
    'product' => 'Andy-Blaise Agent IA Commercial',
    'edition' => 'DEMO',
    'status' => $remaining > 0 ? 'active' : 'expired',
    'remaining_seconds' => $remaining,
    'expires_at' => date(DATE_ATOM, $expiresAt)
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
