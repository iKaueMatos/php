<?php

$_SESSION['user'] = (object) [
    'id' => 1,
    'name' => 'Usuário Teste',
    'is_admin' => true 
];

function requireValidSession($requiresAdmin = false) {
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }

    $user = $_SESSION['user'];

    if ($requiresAdmin && !$user->is_admin) {
        addErrorMsg('Acesso negado!');
        header('Location: day_records.php');
        exit();
    }
}

requireValidSession(true); 

