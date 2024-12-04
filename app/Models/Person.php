<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'id' => 'required',
        'name' => 'required',
        'mail' => 'email',
    );

    public function getData()
    {
        return $this->name;
    }
}
