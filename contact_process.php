<?php
// contact_process.php
require_once 'config.php';
 
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // If accessed directly, show small page and redirect back via JS
    echo '<!doctype html><html><head><meta charset="utf-8"><title>Redirecting...</title></head><body><script>window.location.href="contact.html";</script></body></html>';
    exit;
}
 
$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$msg   = trim($_POST['message'] ?? '');
 
if (empty($name) || empty($email) || empty($msg)) {
    // show error and redirect back with error flag
    echo '<!doctype html><html><head><meta charset="utf-8"><title>Submitting...</title></head><body>';
    echo '<script>window.location.href="contact.html?status=error";</script>';
    echo '</body></html>';
    exit;
}
 
try {
    $pdo = getPDO();
    $stmt = $pdo->prepare("INSERT INTO contact_messages (name,email,phone,message) VALUES (?,?,?,?)");
    $stmt->execute([$name, $email, $phone, $msg]);
 
    // On success, produce a tiny page that uses JS to redirect to contact.html with success flag
    echo '<!doctype html><html><head><meta charset="utf-8"><title>Thanks</title></head><body>';
    echo '<script>';
    echo 'window.location.href = "contact.html?status=success";';
    echo '</script>';
    echo '</body></html>';
    exit;
} catch (Exception $e) {
    // On DB error, redirect back with error
    echo '<!doctype html><html><head><meta charset="utf-8"><title>Error</title></head><body>';
    echo '<script>window.location.href="contact.html?status=error";</script>';
    echo '</body></html>';
    exit;
}
?>
