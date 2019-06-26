<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use MongoDB\Client;

class ExamController extends Controller
{
    // 连接数据库
    public function mysql(){
        $data = [
            'ip'        => $_SERVER['REMOTE_ADDR'],
            'UA'        => $_SERVER['HTTP_USER_AGENT'],
            'url'       => $_SERVER['REQUEST_URI'],
            'time'      => $_SERVER['REQUEST_TIME']
        ];
//        $mongodb = new Client('mongodb://192.168.188.145:27017');
//        $db = $mongodb->test->test;
//        $res= $db->insertOne($data);
        $id = DB::table('test')->insertGetId($data);


        var_dump($id);echo "<br />";
//        var_dump($res->getInsertedId());
    }
}

