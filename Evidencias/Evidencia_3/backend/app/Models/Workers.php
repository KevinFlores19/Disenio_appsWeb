<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $table = "workers";
    public $timestamps = false;

    protected $fillable = ['name', 'user_name', 'password', 'role_id'];
}
