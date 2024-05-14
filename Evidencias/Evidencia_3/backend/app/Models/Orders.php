<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
	public $timestamps = false;

    protected $fillable = ['id','notes', 'data_time', 'invoice_number', 'customer_number','customer_id','status','photo_id'];
}
