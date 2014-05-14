<?php
iconv_set_encoding('internal_encoding', 'UTF-8');
mb_internal_encoding('UTF-8');

spl_autoload_register('autoloader');  //autoloader('TestsController');

function autoloader($class)
{
    if (preg_match('/Controller$/', $class)) {
        $file = __DIR__ . '/../app/controllers/' . $class . '.php';

        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new Exception('Unable to load class.');
        }
    } else {
        $file = __DIR__ . '/../app/model/' . $class . '.php';
        
        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new Exception('Unable to load class.');
        }
    }
}

$test = new TestController();
$request = new RouterController();
$url = $_SERVER['REQUEST_URI'];

$var = $request->parseUrl($url);
$par = $request->getParameters($url);
$con = $request->getControllerName($url);

$test->defaultAction();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="chessboard.css" />
  </head>
  <body>
    <h2>Příliš žluťoučký kůň úpěl ďábelské ódy</h2>
    <p><?= $con ?></p>
    <?php print_r($par) ?>
  </body>
</html>