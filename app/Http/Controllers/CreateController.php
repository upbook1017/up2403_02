<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function create(Request $request)//create.blade.phpからのリクエスト
    {
        return view('home.create');//入力フォーム(create.blade.php)
    }
    public function create1(Request $request)//DBのクエリビルダによるレコード追加
    {
        $param = [
            'topic' => $request->topic,
            'comment' => $request->comment,
        ];
        DB::table('topics_data')->insert($param);
        return redirect('home.topic');//フォーム送信後、topic.blad.phpへ自動的にリダイレクト
    }
}
