<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/11/15
 * Time: 18:42
 */

namespace app\admin\controller;


use cmf\controller\HomeBaseController;

class QueueController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch('queue:index');
    }
}
