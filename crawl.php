<?php

require_once './lib/LIB_http.php';
require_once './lib/LIB_parse.php';
require_once './lib/phpQuery.php';
require_once './conf/SeverityConf.php';

$total = 0;
foreach (SeverityConf::$pages as $key => $value) {

    if ($value['run']) {
        $num = 0;
        echo "********************************************************************\n";
        echo "$key\n";
        echo "********************************************************************\n";

//        phpQuery::$debug = TRUE;
        $pq = phpQuery::newDocumentFile($value['url']);
//        var_dump($pq);
//        echo $pq->html();

        foreach ($value['rules'] as $rule) {
            /**
             * 选取含有url的html片段
             */
            echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
            echo $rule['cssSelector'] . "\n";
            echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";

            $htmlpiece = pq($rule['cssSelector'])->htmlOuter();
//            echo $htmlpiece . "\n";
//            echo iconv('gbk', 'UTF-8', $htmlpiece) . "\n";

            /**
             * 根据包含a标签的祖先标签进行解析
             */
            $nodes = parse_array($htmlpiece, '<' . $rule['atagInclude'], '</' . $rule['atagInclude'] . '>');

            foreach ($nodes as $node) {
//            echo iconv('gbk', 'UTF-8', $node) . "\n";
//                echo $node;

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

                    if ($rule['commentTag']) {
                        $comment = return_between($node, '<' . $rule['commentTag'] . '>', '</' . $rule['commentTag'] . '>', EXCL);
                        $saveString.="\t" . $comment;
                    }

                    echo $saveString . "\n";
                }
            }
        }
        echo "********************************************************************\n";
        echo "$key DONE num:$num\n";
        echo "********************************************************************\n";
    }
}

echo "TOTAL:$total\n";
