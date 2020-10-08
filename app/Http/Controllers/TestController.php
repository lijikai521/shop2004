<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function hello()
    {
    	 echo "gello world";
    }

    public function sqli()
    {
    	// $users = DB::table('p_users')->limit(3)->get();//->limit(3)加入搜索条件不然会很多
    	//$u = DB::table('p_users')->where(['user_name'=>'张海军'])->first();
    	//$u = DB::table('p_users')->where(['user_id'=>31])->pluck('user_name'); 查询id条数
    	//dd($u);
    	// $count = DB::table('p_users')->count();//查询表有多少记录
    	//  echo $count;
    	$u = DB::table('p_users')->select('user_id','user_name','password')->where(['user_id'=>5])->first();//  查询select字段
    	echo '<pre>';print_r($u);echo'</pre>';
    }
}
