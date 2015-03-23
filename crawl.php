<?php

require_once './lib/LIB_http.php';
require_once './lib/LIB_parse.php';
require_once './lib/phpQuery.php';
require_once './conf/SeverityConf.php';

foreach (SeverityConf::$pages as $key => $value) {
    echo "********************************************************************\n";
    echo "$key\n";
    echo "********************************************************************\n";
    phpQuery::newDocumentFile($value['url']);
    foreach ($value['grades'] as $css => $grade) {
        $htmlpiece = pq($css)->html();
        $urls = parse_array($htmlpiece, "<a", "</a>");
        foreach ($urls as $atag) {
            echo iconv('gbk', 'UTF-8', $atag) . "\n";
//            echo iconv('gbk', 'UTF-8', return_between($atag, '>', '<', EXCL)) . "\n";
            echo get_attribute($atag, "href") . " " . $grade . "\n";
        }
    }
}