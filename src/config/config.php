<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

// Constantes gerais
define('DAILY_TIME', 60 * 60 * 8);

// Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models')); // Adicione a barra antes de '../models'
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views')); // Adicione a barra antes de '../views'
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template')); // Adicione a barra antes de '../views/template'
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers')); // Adicione a barra antes de '../controllers'
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions')); // Adicione a barra antes de '../exceptions'

// Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(dirname(__FILE__) . '/date_utils.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(MODEL_PATH . '/User.php'));
require_once(realpath(MODEL_PATH . '/WorkingHours.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));
