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
     * url 配置时，禁止加入最后的/
     * 
     */
    static $pages = array(
        /**
         * 网易手机版
         */
        'netease_mobile' =>
        array(
            'url' => 'http://news.163.com/mobile',
            'baseurl' => 'http://news.163.com/mobile',
            'run' => 0,
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
        ),
        /**
         * 凤凰网手机彩版
         */
        'ifeng_3g' =>
        array(
            'url' => 'http://3g.ifeng.com',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.listcb',
                    'atagInclude' => 'li',
                    'score' => '1st',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 凤凰新闻手机彩板
         */
        'ifeng_news_3g' =>
        array(
            'url' => 'http://3g.ifeng.com/news/newsi',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.listcb',
                    'atagInclude' => 'li',
                    'score' => '1st',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网手机彩板
         */
        'people_m' =>
        array(
            'url' => 'http://m.people.cn/0/index_3.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '#area_1',
                    'atagInclude' => 'div',
                    'score' => '1st',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#area_2',
                    'atagInclude' => 'div',
                    'score' => '1st',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#area_3',
                    'atagInclude' => 'div',
                    'score' => '1st',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="list_a list_c list_d"]',
                    'atagInclude' => 'li',
                    'score' => '1st',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => 'div[class!="nav o_h"]>ul>li',
                    'atagInclude' => 'li',
                    'score' => '1st',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网新闻手机版
         */
        'people_m_news' =>
        array(
            'url' => 'http://m.people.cn/52/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '[class="pd_focus"]>h1',
                    'atagInclude' => 'h1',
                    'score' => '1st',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="item"]',
                    'atagInclude' => 'div',
                    'score' => '1st',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="list_c list_d"]>li',
                    'atagInclude' => 'li',
                    'score' => '1st',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="img_b o_h clear"]>ul>li',
                    'atagInclude' => 'li',
                    'score' => '1st',
                    'commentTag' => '',
                ),
            ),
        ),
    );

}
