<?php
// 记录开始运行时间
!defined('START_TIME') && define('START_TIME', $_SERVER['REQUEST_TIME_FLOAT']);

// 设置未捕获的异常处理方法
set_exception_handler(function($exception){
    echo ($exception->getCode()? $exception->getCode().'  ':'').$exception->getMessage(), '<br><br>', $exception->getFile().'  '.$exception->getLine();
    echo '<pre>', $exception->getTraceAsString(), '</pre>';
});

// 程序结束的处理
register_shutdown_function(function(){
    if (Config('app.debug') && (php_sapi_name()!='cli') && Config('app.run-mode')=='mvc') {
        $exectime = round(microtime(true)-START_TIME, 3);
        $exectime = $exectime>1 ? $exectime.' s' : $exectime*1000 . ' ms';
        echo '<script>console.log(\''.Config('app.active-module').'-'.Config('app.run-mode').' '.$exectime.'\');</script>';
    }
});

// 载入 composer autoload
$loader = require __DIR__.'/../vendor/autoload.php';

// 设置loader
PHPKit\PHPKit::set('loader', $loader); unset($loader);

/**
 * 注册用到的工具 设置工具初始化方法(需返回工具实例)
 *
 * 祝玩的开心 ~ ^___^ ~
 */
return PHPKit\PHPKit::registerTools([
    
    'Helper', 'Event',
    
    'Heresy' => function () {
        $heresy = PHPKit\Heresy::getInstance();
        $heresy->searchNamespace(['PHPKit\\'])->bewitch('\\');
        return $heresy;
    },

    'Config' => function () {
        $config = Config::getInstance();
        eachdir(__DIR__.'/../config', function ($file) use ($config) {
            $config->load($file);
        });
        return $config;
    },
    
    'View' => function () {
        $view = View::getInstance();
        $view->addViewsDir(Config('view.paths'));
        return $view;
    },
    
    'DB' => function () {
        $db = DB::getInstance();
        $db->setConfig(Config('database'));
        return $db;
    }, 'AR', 

    'API', 'Route',
    
    'Session' => function () {
        $session = Session::getInstance();
        $session->start(Config('session'));
        return $session;
    }

// 设置工具别名alias 及自动载入工具loadTools
])->loadTools(['Heresy']);
