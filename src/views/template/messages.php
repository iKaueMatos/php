<?php
$errors = [];
$message = null;
$exception = $exception ?? null;

if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} elseif($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

$alertType = '';

if(isset($message['type']) && $message['type'] === 'error') {
    $alertType = 'danger';
} elseif (isset($message['type'])) {
    $alertType = 'success';
}
?>

<?php if($message): ?>
    <div role="alert" class="my-3 alert alert-<?= htmlspecialchars($alertType) ?>">
        <?= htmlspecialchars($message['message']) ?>
    </div>
<?php endif ?>
