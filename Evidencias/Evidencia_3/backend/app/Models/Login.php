<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workers;

class Login extends Model
{
    use HasFactory;
    protected $table = "workers";
	public $timestamps = false;
}
