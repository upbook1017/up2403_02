<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class CreateController extends Controller
{
    public function create(Request $request)//create.blade.phpからのリクエスト
    {
        return view('home.create');//入力フォーム(create.blade.php)
    }
    public function create1(Request $request)
    {
        $request->validate(Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/topic');

    }
}
