<?php
/**
 * Created by PhpStorm.
 * Author: Shadow
 * Date: 2022/2/23
 * Time: 7:31 下午
 * description: test.php
 */

require '../vendor/autoload.php';

use smsbao\Sms;
$sms = new Sms();
echo $sms->sendMessage();