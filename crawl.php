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

    foreach ($value['rules'] as $rule) {
        /**
         * 选取含有url的html片段
         */
        $htmlpiece = pq($rule['cssSelector'])->htmlOuter();
//        echo iconv('gbk', 'UTF-8', $htmlpiece) . "\n";

        /**
         * 根据包含a标签的祖先标签进行解析
         */
        $nodes = parse_array($htmlpiece, '<' . $rule['atagInclude'], '</' . $rule['atagInclude'] . '>');

        foreach ($nodes as $node) {
//            echo iconv('gbk', 'UTF-8', $node) . "\n";
            /**
             * 解析a标签
             */
            $atagArray = parse_array($node, '<a', '</a>');

            foreach ($atagArray as $atag) {
                $saveString = '';
//                echo iconv('gbk', 'UTF-8', $atag) . "\n";

                /**
                 * 取url
                 */
                $saveString.= get_attribute($atag, "href");
//            echo iconv('gbk', 'UTF-8', return_between($atag, '>', '<', EXCL)) . "\n";

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
}