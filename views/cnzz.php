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

if ($cacheKey !== null && is_string($cacheKey)) {
    $data = \Yii::$app->cache->get($cacheKey);
    if ($data === false)
    {
        \Yii::$app->cache->set($cacheKey, $cnzzCode);
    }
} else {
    $data = $cnzzCode;
}
?>    

<?php if (\Yii::$app->request->serverName === $host) :?>
    <?php if ($visible === true) :?>
        <?= $data ?>
    <?php else: ?>
    <div class="hidden">
        <?= $data ?>
    </div>
    <?php endif; ?>
<?php endif; ?>