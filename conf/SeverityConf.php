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
         * 网易新闻手机版
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
         * 手机网易简版
         */
        'netease_mobile' =>
        array(
            'url' => 'http://3g.163.com/touch',
            'baseurl' => 'http://3g.163.com/touch',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => 'ul>li',
                    'atagInclude' => 'li',
                    'score' => '10',
                    'commentTag' => '',
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
            'reg' => '/(&|\?)?mid=[A-Za-z0-9]*&vt=2|(&|\?)?vt=2&mid=[A-Za-z0-9]*/',
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb > .listcb',
                    'atagInclude' => 'li',
                    'score' => '10',
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
            'run' => 1,
            'reg' => '/(&|\?)?mid=[a-zA-Z0-9]*/',
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb > .listcb',
                    'atagInclude' => 'li',
                    'score' => '10',
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
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#area_2',
                    'atagInclude' => 'div',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#area_3',
                    'atagInclude' => 'div',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="list_a list_c list_d"]',
                    'atagInclude' => 'li',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => 'div[class!="nav o_h"]>ul>li',
                    'atagInclude' => 'li',
                    'score' => '10',
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
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="item"]',
                    'atagInclude' => 'div',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="list_c list_d"]>li',
                    'atagInclude' => 'li',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="img_b o_h clear"]>ul>li',
                    'atagInclude' => 'li',
                    'score' => '10',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 搜狐手机版
         */
        'sohu_m' =>
        array(
            'url' => 'http://m.sohu.com/?v=2',
            'baseurl' => 'http://m.sohu.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '[class="w1"]',
                    'atagInclude' => 'p',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls"]',
                    'atagInclude' => 'p',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls ls1"]',
                    'atagInclude' => 'p',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls pb1"]',
                    'atagInclude' => 'p',
                    'score' => '10',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * QQ手机普通版
         */
        'qq_m' =>
        array(
            'url' => 'http://xw.qq.com/simple/s/index',
            'baseurl' => 'http://xw.qq.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.topnews',
                    'atagInclude' => 'h1',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '.topnews',
                    'atagInclude' => 'li',
                    'score' => '10',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '.pubbox',
                    'atagInclude' => 'li',
                    'score' => '10',
                    'commentTag' => '',
                ),
            ),
        ),
//        以下是二类
        /**
         * ifeng娱乐
         */
        'ifeng_enti' =>
        array(
            'url' => 'http://i.ifeng.com/ent/enti',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'reg' => '/[&|\?]?mid=[A-Za-z0-9]*/',
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * ifeng军事
         */
        'ifeng_mili' =>
        array(
            'url' => 'http://i.ifeng.com/mil/mili',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'reg' => '/(&|\?)?mid=[a-zA-Z0-9]*/',
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * ifeng财经
         */
        'ifeng_finance' =>
        array(
            'url' => 'http://3g.ifeng.com/finance/financei',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'reg' => '/(&|\?)?mid=[a-zA-Z0-9]*/',
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb > .listcb',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * ifeng体育
         */
        'ifeng_sport' =>
        array(
            'url' => 'http://i.ifeng.com/sports/sportsi',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * ifeng社会
         */
        'ifeng_social' =>
        array(
            'url' => 'http://i.ifeng.com/news/society/shi',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * ifeng科技
         */
        'ifeng_tech' =>
        array(
            'url' => 'http://i.ifeng.com/tech/techi',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * ifeng汽车
         */
        'ifeng_car' =>
        array(
            'url' => 'http://i.ifeng.com/auto/autoi',
            'baseurl' => 'http://3g.ifeng.com',
            'run' => 0,
            'reg' => '/((&|\?)?vt=2)?(&|\?)?mid=[a-zA-Z0-9]*/',
            'rules' =>
            array(
                array(
                    'cssSelector' => '.nlistcb',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网娱乐
         */
        'people_ent' =>
        array(
            'url' => 'http://m.people.cn/32/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.pd_focus',
                    'atagInclude' => 'h1',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#box',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="channl_con pd_title mt20 clear"]',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网教育
         */
        'people_edu' =>
        array(
            'url' => 'http://m.people.cn/645/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.pd_focus',
                    'atagInclude' => 'h1',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '.pd_focus>p',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#box',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="channl_con pd_title mt20 clear"]',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网社会
         */
        'people_social' =>
        array(
            'url' => 'http://m.people.cn/30/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.pd_focus',
                    'atagInclude' => 'h1',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#box',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="channl_con pd_title mt20 clear"]',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网时尚
         */
        'people_fashion' =>
        array(
            'url' => 'http://m.people.cn/30/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.pd_focus',
                    'atagInclude' => 'h1',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#box',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="channl_con pd_title mt20 clear"]',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网科技
         */
        'people_tech' =>
        array(
            'url' => 'http://m.people.cn/28/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.pd_focus',
                    'atagInclude' => 'h1',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#box',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="img_b o_h clear"]',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="channl_con pd_title mt20 clear"]',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网军事
         */
        'people_mili' =>
        array(
            'url' => 'http://m.people.cn/24/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.pd_focus',
                    'atagInclude' => 'h1',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '.pd_focus>p',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#box',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="channl_con pd_title mt20 clear"]',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网体育
         */
        'people_sport' =>
        array(
            'url' => 'http://m.people.cn/35/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.pd_focus',
                    'atagInclude' => 'h1',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '.pd_focus>p',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#box',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="channl_con pd_title mt20 clear"]',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 人民网财经
         */
        'people_finance' =>
        array(
            'url' => 'http://m.people.cn/26/index.html',
            'baseurl' => 'http://m.people.cn',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.pd_focus',
                    'atagInclude' => 'h1',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '.pd_focus>p',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '#box',
                    'atagInclude' => 'div',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="channl_con pd_title mt20 clear"]',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 搜狐新闻
         */
        'sohu_news' =>
        array(
            'url' => 'http://m.sohu.com/c/2/',
            'baseurl' => 'http://m.sohu.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '[class="w1"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="hn hn1"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 搜狐社会
         */
        'sohu_social' =>
        array(
            'url' => 'http://m.sohu.com/c/53/',
            'baseurl' => 'http://m.sohu.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '[class="ls pb1"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 搜狐军事
         */
        'sohu_mili' =>
        array(
            'url' => 'http://m.sohu.com/c/8/',
            'baseurl' => 'http://m.sohu.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '[class="ls pb1"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 搜狐体育
         */
        'sohu_sport' =>
        array(
            'url' => 'http://m.sohu.com/c/3/',
            'baseurl' => 'http://m.sohu.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '[class="w1"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 搜狐娱乐
         */
        'sohu_ent' =>
        array(
            'url' => 'http://m.sohu.com/c/4/',
            'baseurl' => 'http://m.sohu.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '[class="w1"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="w a3"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 搜狐财经
         */
        'sohu_finance' =>
        array(
            'url' => 'http://m.sohu.com/c/5/',
            'baseurl' => 'http://m.sohu.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '[class="w1"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="w a3"]>p',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="ls"]',
                    'atagInclude' => 'p',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 网易娱乐
         */
        'netease_ent' =>
        array(
            'url' => 'http://3g.163.com/touch/ent',
            'baseurl' => 'http://3g.163.com/touch/ent',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '#newsListContent>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="newsPage"]>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 网易体育
         */
        'netease_sport' =>
        array(
            'url' => 'http://3g.163.com/touch/sports/',
            'baseurl' => 'http://3g.163.com/touch/sports',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '#newsListContent>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="newsPage"]>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 网易军事
         */
        'netease_mil' =>
        array(
            'url' => 'http://3g.163.com/touch/mil',
            'baseurl' => 'http://3g.163.com/touch/mil',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '#newsListContent>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="newsPage"]>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 网易科技
         */
        'netease_tech' =>
        array(
            'url' => 'http://3g.163.com/touch/tech/',
            'baseurl' => 'http://3g.163.com/touch/tech',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '#newsListContent>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="newsPage"]>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * 网易财经
         */
        'netease_finance' =>
        array(
            'url' => 'http://3g.163.com/touch/money/',
            'baseurl' => 'http://3g.163.com/touch/money',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '#newsListContent>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
                array(
                    'cssSelector' => '[class="newsPage"]>li',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * qq财经
         */
        'qq_finance' =>
        array(
            'url' => 'http://xw.qq.com/m/finance/',
            'baseurl' => 'http://xw.qq.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.list',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * qq体育
         */
        'qq_sport' =>
        array(
            'url' => 'http://xw.qq.com/m/sports/',
            'baseurl' => 'http://xw.qq.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.list',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * qq娱乐
         */
        'qq_ent' =>
        array(
            'url' => 'http://xw.qq.com/m/ent/',
            'baseurl' => 'http://xw.qq.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.list',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
        /**
         * qq科技
         */
        'qq_tech' =>
        array(
            'url' => 'http://xw.qq.com/m/tech/',
            'baseurl' => 'http://xw.qq.com',
            'run' => 0,
            'rules' =>
            array(
                array(
                    'cssSelector' => '.list',
                    'atagInclude' => 'li',
                    'score' => '7',
                    'commentTag' => '',
                ),
            ),
        ),
//        end
    );

}
