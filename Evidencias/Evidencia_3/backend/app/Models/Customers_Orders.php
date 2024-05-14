<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers_Orders extends Model
{
    use HasFactory;
    protected $table = "customers__orders";
	public $timestamps = false;
}
