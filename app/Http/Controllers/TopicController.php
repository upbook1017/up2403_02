<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class topicController extends Controller
{
    public function index()
    {
        $data =[
            'msg'=>'これはblade',
        ];
        return view('home.topic', $data);
    }
}
