<?php

/**
 * Description of SeverityConf
 *
 * @author chenxi10
 */
class SeverityConf {

    /**
     *
     * 
     */
    static $pages = array(
        'netease' => array(
            'url' => 'http://news.163.com',
            'grades' => array(
                '.ns-wnews.mb20>h3' => 8,
                '.ns-wnews.mb20>p' => 7,
                '.ns-wnews.mb30>h4' => 7,
                '.ns-wnews.mb40>h4' => 7,
                '.ns-wnews.mb30>li' => 6,
                '.ns-wnews.mb30>p' => 7,
                '.ns-wnews.mb40' => 8,
                '.ns-wnews.mb40.line' => 7,
                '.ns-wnews.mb30.line' => 6,
            )
        ),
    );

}
