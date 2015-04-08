<?php

require_once './lib/LIB_http.php';
require_once './lib/LIB_parse.php';
require_once './lib/phpQuery.php';
require_once './conf/SeverityConf.php';
require_once './lib/medoo.php';

ini_set('date.timezone', 'Asia/Shanghai');

function main() {
    $t1 = microtime(true);
    $info = 0;

    $total = 0;
    foreach (SeverityConf::$pages as $key => $value) {

        if ($value['run']) {
            $num = 0;
            if ($info) {
                echo "********************************************************************\n";
                echo "$key\n";
                echo "********************************************************************\n";
            }
//        phpQuery::$debug = TRUE;
            $pq = phpQuery::newDocumentFile($value['url']);
//        var_dump($pq);
//        echo $pq->html();
//        $res = http_get($value['url'], "");
//        var_dump($res['FILE']);
//        $pq = phpQuery::newDocumentXHTML(tidy($res['FILE']));

            foreach ($value['rules'] as $rule) {
                /**
                 * 选取含有url的html片段
                 */
                if ($info) {
                    echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
                    echo $rule['cssSelector'] . "\n";
                    echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
                }
                $htmlpiece = pq($rule['cssSelector'])->htmlOuter();
//            echo $htmlpiece . "\n";
//            echo iconv('gbk', 'UTF-8', $htmlpiece) . "\n";

                /**
                 * 根据包含a标签的祖先标签进行解析
                 */
                $nodes = parse_array($htmlpiece, '<' . $rule['atagInclude'], '</' . $rule['atagInclude'] . '>');

                foreach ($nodes as $node) {
//            echo iconv('gbk', 'UTF-8', $node) . "\n";
//                echo $node . "\n";

                    /**
                     * 解析a标签
                     */
                    $atagArray = parse_array($node, '<a', '</a>');

                    foreach ($atagArray as $atag) {
                        $num++;
                        $total++;
                        $saveString = '';
//                echo iconv('gbk', 'UTF-8', $atag) . "\n";
//                    echo $atag . "\n";

                        /**
                         * 取url
                         */
                        $href = get_attribute($atag, "href");
                        $hrefinfo = parse_url($href);
                        if (!isset($hrefinfo['scheme'])) {
                            $href = $value['baseurl'] . $href;
                        }
                        $href = html_entity_decode($href);
                        $saveString.= $href;
//                    echo iconv('gbk', 'UTF-8', return_between($atag, '>', '<', EXCL)) . "\n";

                        /**
                         * 打分数
                         */
                        $saveString.="\t" . $rule['score'];

                        $comment = '';
                        if ($rule['commentTag']) {
                            $comment = return_between($node, '<' . $rule['commentTag'] . '>', '</' . $rule['commentTag'] . '>', EXCL);
                            $saveString.="\t" . $comment;
                        }

                        $db = new medoo();

                        $res = $db->select('urlloc', array('loc'), array('url' => $href));

                        if (count($res)) {
                            if ($rule['score'] > $res[0]['loc']) {
                                $db->update('urlloc', array(
                                    'loc' => $rule['score'],
                                    'mtime' => date('Y-m-d H:i:s', time())
                                        ), array(
                                    'url' => $href,
                                    'domain' => $key,
                                ));
                            }
                        } else {
                            $db->insert("urlloc", array(
                                'url' => $href,
                                'loc' => $rule['score'],
                                'ctime' => date('Y-m-d H:i:s', time()),
                                'domain' => $key,
                            ));
                        }

                        echo $saveString . "\n";
                    }
                }
            }
            if ($info) {
                echo "********************************************************************\n";
                echo "$key DONE num:$num\n";
                echo "********************************************************************\n";
            }
        }
    }

    $t2 = microtime(true);
    echo (($t2 - $t1) * 1000) . "ms\n";
    echo "TOTAL:$total\n";
}

main();
