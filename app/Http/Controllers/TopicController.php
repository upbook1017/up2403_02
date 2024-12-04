<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index(Request $request)
    {
        $data = Board::all();
        return view('home.topic', ['data1' => $data]);
    }
}
