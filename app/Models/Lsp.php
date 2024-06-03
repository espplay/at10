<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lsp extends Model
{
    use HasFactory;
    protected $table='lsps';
    public function t_food() 
    {
        return $this->hasMany(T_food::class,'lsp_id','id');
    }
}