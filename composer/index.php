
<?php
/*의존성주입*/
// $a = 1;
// error_log(var_dump($a));

// require_once __DIR__.'/library/vendor/monolog/monolog/src/Monolog/Logger.php';
echo __DIR__;
require_once __DIR__.'/../library/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NativeMailerHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::ERROR));
$log->pushHandler(new NativeMailerHandler(
  to:'ckdbsk12@gmail.com'
  , subject: 'Emergency!!'
  , from: "out@system.com"
  , lovel: Logger:EMERGENCY));

// add records to the log
$log->warning( message : 'Foo');
$log->error( message : 'Bar');
$log->emergency( message:"emergency");
?>