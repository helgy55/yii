<?php  // точка входа пользователя
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php'; // эквивалентно вызову dirname(__FILE__)
require __DIR__.'/../vendor/yiisoft/yii2/Yii.php';// __FILE__Полный путь и имя текущего файла с развернутыми симлинками.
$config = require __DIR__.'/../config/web.php';//dirname-Возвращает имя родительского каталога из указанного пути

(new yii\web\Application($config))->run();
