<?php
// IP exposure disabled for the public repo version.
$data = [
    'status' => 'disabled',
    'message' => 'Client IP data is intentionally not exposed in the public repository version.'
];

echo json_encode($data);
?>