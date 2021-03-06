<?php
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Mvc\View\Engine\Php as PhpViewEngine;
/**
 * The FactoryDefault Dependency Injector automatically registers the right
 * services to provide a full stack framework
 */
$di = new FactoryDefault();
/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set(
    "url",
    function () use ($config) {
        $url = new UrlResolver();
        $url->setBaseUri(
            $config->application->baseUri
        );
        return $url;
    },
    true
);
/**
 * Setting up the view component
 */
$di->setShared('view', function () use ($di,$config) {
    $view = new View();
    $view->setViewsDir($config->application->viewsDir); // path to directory with views, loaded from config in this case
    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($di, $config) {
            $volt = new VoltEngine($view, $di);
            $volt->setOptions(array(
                'compiledPath' => $config->application->cacheDir, // path to cache dir, loaded from config in this case
                'compiledSeparator' => '_'
            ));
            return $volt;
        },
        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
    ));
    return $view;
});
/**
 * Database connection is created based on the parameters defined in the
 * configuration file
 */
$di->set(
    'db',
    function () use ($config) {
        return new DbAdapter(
            [
                "host"     => $config->database->host,
                "username" => $config->database->username,
                "password" => $config->database->password,
                "dbname"   => $config->database->dbname,
            ]
        );
    }
);
/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->set(
    "modelsMetadata",
    function () use ($config) {
        return new MetaDataAdapter();
    }
);
/**
 * Start the session the first time some component request the session service
 */
$di->set(
    "session",
    function () {
        $session = new SessionAdapter();
        $session->start();
        return $session;
    }
);