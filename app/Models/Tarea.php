<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas';
    
    //protected $fillable = ['titulo', 'descripcion', 'fecha_limite', 'trabajador_id'];

    public function trabajadores() {
        //Una tarea -> un trabajador

        /*
        Trabajador  1  :  N  Tarea
        hasMany               belongsTo

                    1  :  1
        hasOne/Many           belongsTo
        */

        //sail artisan make:model Trabajadores --controller --migration
        //sail artisan make:view trabajadores.vista
        //sai artisan migrate
        //git remote add origin hhtps://repositorio.git
        //git branch -M main
        //git push -u origin main
        //git init
        //curl -s https://laravel.build/nombre-proyecto | bash
        

        return $this->belongsTo(Trabajador::class);
    }


}
