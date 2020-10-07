<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'fname','lname','address','dob','phone', 'email',
    ];

}
