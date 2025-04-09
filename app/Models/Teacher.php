<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = '';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}
