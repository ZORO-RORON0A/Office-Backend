<?php
// CORS HEADERS (TOP MOST)
header("Content-Type: application/json");

// TEMP: allow all (for debugging)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
// Handle preflight
// if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
//     http_response_code(200);
//     exit();
//     }
require_once 'Service_controller.php';
