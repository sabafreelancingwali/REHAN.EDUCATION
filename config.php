<?php
// config.php - DB connection settings
$DB_HOST = 'localhost';
$DB_NAME = 'dbhexgvjjic0az';
$DB_USER = 'uei4bkjtcem6s';
$DB_PASS = 'wmhalmspfjgz';
 
// PDO connection helper
function getPDO(){
    global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;
    $dsn = "mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4";
    try {
        $pdo = new PDO($dsn, $DB_USER, $DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        return $pdo;
    } catch (Exception $e) {
        // In production don't echo errors. For dev, show brief message.
        echo "<h2>Database connection error</h2><p>Please check config.php</p>";
        exit;
    }
}
?>
