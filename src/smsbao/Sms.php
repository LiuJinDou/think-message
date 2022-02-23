<?php
/**
 * Created by PhpStorm.
 * Author: Shadow
 * Date: 2022/2/23
 * Time: 7:24 下午
 * description: Sms.php
 */

namespace  smsbao;
class Sms
{
    protected $config;

    public function __construct()
    {
        $this->config = require __DIR__.'/../../config/config.php';
    }

    public function sendMessage(){
        return true;
    }
}