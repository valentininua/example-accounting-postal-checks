<?php

    include __DIR__ . '/config.php';
    spl_autoload_register(function ($class_name) {
        include "lib/" . $class_name . '.php';
    });

    //    $DB   = new Db($config['Db']['host'] , $config['Db']['login'],$config['Db']['pass'] );
    //    $FTP  = new Ftp($config['Ftp']['host'] , $config['Ftp']['login'],$config['Ftp']['pass']);
    //    $MAIL = new Mail($config['Mail']['host'] , $config['Mail']['login'],$config['Mail']['pass']);

