<?php
/*
Source - https://stackoverflow.com/a/25661403
Posted by Fiach Reid, modified by community. See post 'Timeline' for change history
Retrieved 2026-03-18, License - CC BY-SA 4.0
*/


try {

    echo json_encode(['title' => 'Service Controller Page', 'message' => 'Welcome to the Service Controller']);
} catch (Exception $e) {
    echo json_encode(["Error: " . $e->getMessage()]);
}
