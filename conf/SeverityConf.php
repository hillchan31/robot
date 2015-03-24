<?php

/**
 * Description of SeverityConf
 *
 * @author chenxi10
 */
class SeverityConf {

    /**
     * $url 抓取网站
     * $grades 抓取规则，到a标签上一层; css选择器 =>array(分数，评论数位置)
     * 
     */
    static $pages = array(
        'netease_mobile' =>
        array(
            'url' => 'http://news.163.com/mobile',
            'rules' =>
            array(
                array(
                    'cssSelector' => '.ns-wnews>h3',
                    'atagInclude' => 'h3',
                    'score' => 8,
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '.ns-wnews>ul>li',
                    'atagInclude' => 'li',
                    'score' => 7,
                    'commentTag' => 'span',
                ),
            ),
        )
    );

}
