<?php
// GET __DIR__ parent directory
require_once realpath(__DIR__ . '/../functions.php');

// Connect to Oracle Database
$conn = oci_connect($_ENV['ERPDB_TW_USER'], $_ENV['ERPDB_TW_PASSWORD'], $_ENV['ERPDB_TW_CONNECT_STRING']);

// Check connection
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
} else {
    echo "Connection Success <br />";
}
// show all database tables
$stid = oci_parse($conn, 'SELECT * FROM v$version');
oci_execute($stid);
// output json
$rows = array();
while ($r = oci_fetch_assoc($stid)) {
    $rows[] = $r;
}
echo json_encode($rows);
// oci_free_statement($stid);
// oci_close($conn);
?>