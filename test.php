<?php

require_once './lib/LIB_http.php';
require_once './lib/LIB_parse.php';
require_once './lib/phpQuery.php';
require_once './conf/SeverityConf.php';
require_once './lib/medoo.php';

ini_set('date.timezone', 'Asia/Shanghai');

//$db = new medoo();
//
//$href = 2;
//$rule['score'] = 13;
//
//$res = $db->select('urlloc', array('loc'), array('url' => $href));
//
//if (count($res)) {
//    if ($rule['score'] > $res[0]['loc']) {
//        $db->update('urlloc', array('loc' => $rule['score']), array('url' => $href));
//    }
//} else {
//    $db->insert("urlloc", array(
//        'url' => $href,
//        'loc' => $rule['score'],
//        'ctime' => date('Y-m-d H:i:s', time()),
//    ));
//}
//$db->insert("urlloc", array(
//    'url' => $href,
//    'loc' => $rule['score'],
//    'ctime' => date('Y-m-d H:i:s', time()),
//));

foreach (SeverityConf::$pages as $key => $value) {
//    echo $key . "\n";
    echo $value['url'] . "\n";
}