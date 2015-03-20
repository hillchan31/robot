<?php

require_once './lib/LIB_http.php';
require_once './lib/LIB_parse.php';


$target = "http://news.163.com/";
$web_page = http_get($target, "");

$ns_main = parse_array($web_page['FILE'], '<div class="ns-mr60">', '<div class="ns-side">', EXCL);
foreach ($ns_main as $key => $html) {
    echo "********************************************************************\n";
    echo "$key\n";
    echo "********************************************************************\n";
    $hot_array = parse_array($html, "<a", "</a>");
    foreach ($hot_array as $atag) {

        echo iconv('gbk', 'UTF-8', $atag) . "\n";
        echo get_attribute($atag, "href") . "\n";
    }
}

echo "\n\n\n";

//$js_removed = remove($web_page['FILE'], "<script", "</script>");
//$nav_removed = remove($js_removed, '<div class="ntes_nav_wrap" ', '</div>');
//$nav_channel_removed = remove($nav_removed, '<div class="N-nav-channel ', '</div>');

/**
 * 抓取头条区 <div class="ns-wnews mb20">
 */
$web_page['FILE'] = remove($web_page['FILE'], "<script", "</script>");
//echo iconv('gbk', 'UTF-8', $web_page['FILE']) . "\n";
$web_page['FILE'] = str_replace("\n", "", $web_page['FILE']);
//echo iconv('gbk', 'UTF-8', $web_page['FILE']) . "\n";
$hot_div = return_between($web_page['FILE'], '<div class="ns-mr60">', '<div class="ns-side">', EXCL);
//$ns_main = parse_array($web_page['FILE'], '<div class="ns-mr60">', '<div class="ns-side">', EXCL);
//var_dump($ns_main);
//echo iconv('gbk', 'UTF-8', $hot_div) . "\n";
$hot_array = parse_array($hot_div, "<a", "</a>");

echo count($hot_array) . "\n";
foreach ($hot_array as $value) {
    echo iconv('gbk', 'UTF-8', $value) . "\n";
    echo get_attribute($value, "href") . "\n";
}













// <a href="http://tech.sina.com.cn/mobile/n/2015-03-18/064010018579_2.shtml">下一页</a>





/**
 * fopen() and fget()
 */
//$target = "http://www.WebbotsSpidersScreenScrapers.com/hello_world.html";
//$ref = "http://www.baidu.com";
//$file_handle = fopen($target, "r");
//
//while (!feof($file_handle)) {
//    echo fgets($file_handle, 4096);
//}
//fclose($file_handle);

/**
 * file()
 */
//$content_array = file($target);
//foreach ($content_array as $value) {
//    echo $value;
//}
//
//$res = http_get($target, $ref);
//var_dump($res);
//$testString = "Hello 1 2 4";
//$parse_text = split_string($testString, "1", AFTER, EXCL);
//echo $parse_text;
//$target = "http://www.baidu.com";
//$web_page = http_get($target, $ref = "");
//var_dump($web_page);
//
//$title_incl = return_between($web_page['FILE'], "<title>", "</title>", INCL);
//$title_excl = return_between($web_page['FILE'], "<title>", "</title>", EXCL);
//
//echo $title_incl;
//echo "\n";
//echo $title_excl;
//$target = "http://sh.sina.com.cn/news/to/2015-03-12/detail-iavxeafs1700466.shtml";
//$web_page = http_get($target, $ref = "");
//var_dump($web_page);
//$js_removed = remove($web_page['FILE'], "<script", "</script>");
//echo $js_removed . "\n";

/**
 * stristr() 不区分大小写 strstr()区分大小写
 */
//if (stristr($js_removed, "下一页")) {
//    echo "下一页";
//echo "\n";
//}
//$content = $a_array = parse_array($web_page['FILE'], "<a", "</a>");

//foreach ($a_array as $value) {
//    echo $value . "\n";
//    echo get_attribute($value, "href") . "\n";
//}
//$str1 = "Hill`````````````";
//$str2 = "Hiil1```````````````````";
//echo similar_text($str1, $str2);
//echo dirname(__FILE__);
//echo dirname(dirname(__FILE__));
//$path = parse_url($target);
//echo $path;
//var_dump($path);
//echo "\n";
//$ext = parse_url($path, PATHINFO_EXTENSION);
//echo $ext;
//$res = preg_match_all("/title/", 'title is title is' , $resarr);
//var_dump($resarr);

//$subject_str = "test 123 testa";
//$res = preg_match_all("/\d*/", $subject_str, $resarr);
//var_dump($resarr);
