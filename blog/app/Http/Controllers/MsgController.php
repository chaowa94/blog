<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Http\Requests;
use App\Models\Msg;

class MsgController extends Controller
{
    //首页
    public function index(){
        $msgs=Msg::all();
        return view('index')->with('msgs',$msgs);
    }
    //查
    public function view($id){
        return view('view')->withMsg(Msg::find($id));
    }
    //增
    public function add(){
        $msg=new Msg();
        $msg->title=Request::input('title');
        $msg->body=Request::input('body');
        $msg->save();
        return redirect('/');
    }
    //删
    public function delete($id){
        Msg::destroy($id);
        return redirect('/');
    }
    //改
    public function edit($id){
        return view('edit')->withMsg(Msg::find($id));
    }
    public function postEdit($id){
        $msg=Msg::find($id);
        $msg->title=Request::input('title');
        $msg->body=Request::input('body');
        $msg->save();
        return redirect('/');
    }
}
