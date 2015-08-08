The Yii 2 Widgets
=================
The Widgets for Yii 2 Applications

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist vistart/yii2-widgets "*"
```

or add

```
"vistart/yii2-widgets": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by :

```php
<?= \vistart\Widgets\CnzzWidget::widget([
    'visible' => true,
    'cnzzCode' => <the js code of statistical tool>,
    'host' => <the hostname which your website just host>,
]); ?>
```