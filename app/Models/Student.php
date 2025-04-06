<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students1';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}
