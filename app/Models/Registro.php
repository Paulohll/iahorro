<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'ingresos',
        'monto_solicitado',
        'hora_inicial',
        'hora_final'
    ];

    public function analista()
    {
        return $this->belongsTo('App\Models\Analista');
    }

    public function score()
    {
        $interval=$this->created_at->diff(now());
        
        return ($this->monto_solicitado/$this->ingresos)*$interval->format('%H');
    }
}
