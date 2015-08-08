<?php

/*
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link http://vistart.name/
 * @copyright Copyright (c) 2015 vistart
 * @license http://vistart.name/license/
 */

namespace vistart\Widgets;

use yii\base\Widget;
/**
 * This CnzzWidget is used to display CNZZ(www.cnzz.com) statistical tools
 * JS code. You should set the $cnzzCode before using it.
 * If the other statistical tools JS code are also solo- and in-body- JS code,
 * this widget also can be used for them.
 *
 * @author vistart
 */
class CnzzWidget extends Widget
{
    /**
     * @var string the CNZZ statistical tool JS code.
     */
    public $cnzzCode = '';
    
    /**
     * Determine whether display the CNZZ text.
     * @var boolean True if you want to display it, or it will not.
     */
    public $visible = false;
    
    /**
     * The hostname which should match the current hostname. The statistical
     * code will output when the $host matches the current hostname.
     * @var string hostname.
     */
    public $host = '';
    
    /**
     * The cache key that associated with this widget.
     * @var string 
     */
    public $cacheKey = 'cnzz_1';
    
    public function run()
    {
        return $this->render('cnzz', [
            'cnzzCode' => $this->cnzzCode, 
            'visible' => $this->visible, 
            'host' => $this->host,
            'cacheKey' => $this->cacheKey,
        ]);
    }
}
