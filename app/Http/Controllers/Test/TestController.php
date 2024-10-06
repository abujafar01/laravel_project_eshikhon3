<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Testing\TestView;

class TestController extends Controller
{
    public function testMethod1(){
        //echo "ok 1";
        $arr =['name'=>'korim','roll'=>'2'];
        return view('testView2')->with('arr',$arr);
    }

    public function testMethod2($data){
        //echo "ok 2" .$data;
        return view('testView', compact('data'));
    }

    public function testMethod3(){
        echo "ok 3";
    }
}
