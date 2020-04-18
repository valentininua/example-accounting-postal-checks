<?php
    ## CRON ## Формирование пакета чеков после сканирования на FTP.
    include '../AppKernel.php';
    (new Ftp($config['Ftp']['host'], $config['Ftp']['login'], $config['Ftp']['pass']))->ftpSync();
