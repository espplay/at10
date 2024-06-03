<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lps;

class T_food extends Model
{
    use HasFactory;
    protected $table='t_foods';
    public function lsp()
    {
        return $this->belongsTo(Lsp::class,'lsp_id','id');
    }
}