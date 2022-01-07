<?php

namespace app\test\controller;
use app\model\User;
use think\Controller;
use think\Db;
use app\model\User as UserModel;
use think\Request;
use think\response\Json;
use think\Route;

class DataTest extends Controller
{

    public function index(Request $request)
    {
//        Db::name('user')->where('id',1)->setField('name','及时雨-宋江');
//        $data = UserModel::where('age','>=',40)->select();
//        $subQuery = Db::name('two')->field('uid')->
//            where('gender', '男')->buildSql(true);
//        $result = Db::name('one')->where('id','exp',
//            'IN'.$subQuery)->select();
//        $result = Db::name('user')->where([
//            'gender'    =>  '男',
//            'price'     =>  [60,70,80],
//        ])->select();
//        $result = Db::name('user')->where([
//            ['gender','=','男'],
//            ['price','=','100'],
//        ])->select();
//        $map[0] = ['gender','=','男'];
//        $map[1] = ['price','in',[60,70,80]];
//        $result = Db::name('user')->where($map)->select();
//        $result = Db::name('user')->field('id, username,email')->select();
//        $result = Db::name('user')->alias('a')->select();
//        return json($result);
//        $data = $request->param();
//        $result = Db::name('user')->where($data)->findOrEmpty();

        $result = Db::name('user')
            ->select();
        return json($result);

    }

}