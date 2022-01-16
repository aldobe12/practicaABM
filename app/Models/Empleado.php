<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
/* 
    public function changeTypeStatus($value){
        $this->attributes['status'] = $value == 1 ? 'Activo' : 'Inactivo';
    } */
}

class Post extends Model
{
    public $timestamps = false;

    //
}