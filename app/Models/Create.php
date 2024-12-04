<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'repuired',
        'topic' => 'required|min:0|max:20',
        'comment' => 'required|min:0|max:100',
    );
    //use HasFactory;とりあえずコメント化

    public function getData()
    {
        return $this->id . ': ' . $this->name . $this->topic . $this->comment;
    }
}
