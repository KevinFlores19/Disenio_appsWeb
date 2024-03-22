<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Conferences;
use App\Models\Divisions;

class Teams extends Model
{

    public function conference(){
    return $this->belongsTo(Conferences::class);
    }

    public function division(){
    return $this->belongsTo(Divisions::class);
    }   


    use HasFactory;
    protected $table = "teams";


}
