<?php
session_start();
requireValidSession();

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

try {
    $currentTime = strftime('%H:%M:%S', time());

    if(isset($_POST['forcedTime']) && $_POST['forcedTime']) {
        $currentTime = $_POST['forcedTime'];
    }

    $records->innout($currentTime);
    addSuccessMsg('Ponto inserido com sucesso!');
} catch(AppException $e) {
    addErrorMsg($e->getMessage());
}

if (!headers_sent()) {
    header('Location: day_records.php');
    exit();
} else {
    echo "Erro: cabeçalhos já foram enviados. Não é possível redirecionar.";
}
