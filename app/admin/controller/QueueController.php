<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/11/15
 * Time: 18:42
 */

namespace app\admin\controller;


use cmf\controller\AdminBaseController;

class QueueController extends AdminBaseController
{
    public function index()
    {
        return $this->fetch('queue:index');
    }

    public function add()
    {
        return $this->fetch('queue:add');
    }

    public function edit()
    {
        return $this->fetch('queue:add');
    }
}
