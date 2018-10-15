<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = ['first_name', 'last_name', 'building', 'room', 'problem', 'email'];
}
