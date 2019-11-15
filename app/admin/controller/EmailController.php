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
    public function emailList()
    {
        return $this->fetch('email:emailList');
    }

    public function addEmailList()
    {
        return $this->fetch('email:addEmailList');
    }

    public function templateList()
    {
        return $this->fetch('email:templateList');
    }

    public function addTemplate()
    {
        return $this->fetch('email:addTemplate');
    }
}
