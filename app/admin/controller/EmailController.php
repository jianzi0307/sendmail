<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/11/15
 * Time: 19:40
 */

namespace app\admin\controller;


use cmf\controller\AdminBaseController;

class EmailController extends AdminBaseController
{
    public function index()
    {
        return $this->fetch('email:index');
    }
}
