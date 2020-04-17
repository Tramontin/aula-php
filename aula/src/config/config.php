<?php

//LOCALIZAÇÃO E IDIOMA
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt-br', 'pt-br.utf-8', 'portuguese');

//PASTAS
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTIONS_PATH', realpath(dirname(__FILE__) . '/../exceptions'));



//ARQUIVOS para importar no início da aplicação
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(EXCEPTIONS_PATH . '/appException.php'));

