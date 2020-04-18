<?php
    include 'AppKernel.php';
    #- Привязку чека к подписчику и журналу

    $DB = new Db($config['Db']['host'] , $config['Db']['login'],$config['Db']['pass']);
    $dataArray = (new File())->dataArray();

    $sql = "SELECT * FROM valent01_s1.subscriber_user  t where name ='". $dataArray['nameSender'] ."'"; //TODO SQL injection
    $result = $DB->conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        // TODO :: уточнить
        $DB->conn->query('INSERT INTO valent01_s1.`check` (check_number, dispatch_date, tracking_numbe, status) VALUES ('. (int) $row['id'] .', null, 12, 0)');
    }
