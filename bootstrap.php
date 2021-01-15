<?php
require __DIR__ . '/vendor/autoload.php';

define('HOME', 'http://localhost:8080');
define('VIEWS_PATH', __DIR__ . '/views/');
define('UPLOAD_PATH', __DIR__ . '/public/uploads/');
define('APP_DEBUG', true);

/**
 * Database config
 */
define('DB_NAME', 'teste_db4');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'merciof');
define('DB_PASSWORD', 'admin');
define('DB_CHARSET', 'UTF8');


/**
 * PagSeguro Enviroments
 */
putenv('PAGSEGURO_ENV=sandbox');
putenv('PAGSEGURO_EMAIL=merciofilho@gmail.com');
putenv('PAGSEGURO_TOKEN_SANDBOX=7FF23243F9FD448C8EEB69088240AC28');
putenv('PAGSEGURO_CHARSET=UTF-8');

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");