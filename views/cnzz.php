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

?>    
<?php if (\Yii::$app->request->serverName === $host) :?>
    <?php if ($visible === true) :?>
        <?= $cnzzCode ?>
    <?php else: ?>
    <div class="hidden">
        <?= $cnzzCode ?>
    </div>
    <?php endif; ?>
<?php endif; ?>