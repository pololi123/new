<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $data =Db::name('admin_user')->select();
        dump($data);
    }
}
