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
 * Description of CnzzWidget
 *
 * @author vistart
 */
class CnzzWidget extends Widget
{
    public $cnzzCode = '';
    public $visible = false;
    public $host = '';
    public function run()
    {
        return $this->render('cnzz', ['cnzzCode' => $this->cnzzCode, 'visible' => $this->visible, 'host' => $this->host]);
    }
}
