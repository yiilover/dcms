<?php

/**
* $Author: Balack <balack.xu@zamplus.com>
 * $Createtime: 2014-10-11 12:01
 */
return array(
    'db'=>array(
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=dcms2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
    ),
    'tcdb'=>array(
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=gift',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'tablePrefix' => 'tc_',
    ),
);