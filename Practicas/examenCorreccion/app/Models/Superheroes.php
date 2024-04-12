<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroes extends Model
{
    use HasFactory;
    protected $table = "superheroes";
	public $timestamps = false;
}
