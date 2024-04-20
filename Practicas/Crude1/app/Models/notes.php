<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function todas_las_notas(){
        return notes::where('active',true)->get();
    }

    static function nota_por_id($id){
        return notes::where('id',$id)
        ->where ('active', true)
        ->firstOrFail();
    }
}
