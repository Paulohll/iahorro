<?php

namespace App\Observers;

use App\Models\Registro;
use App\Models\Analista;

class RegistroObserver
{
    /**
     * Handle the Registro "created" event.
     *
     * @param  \App\Models\Registro  $registro
     * @return void
     */
    public function created(Registro $registro)
    {
     
    }

      /**
     * Handle the post "saving" event.
     *
   * @param  \App\Models\Registro  $registro
     * @return void
     */
    public function saving(Registro $registro)
    {
       $registro->analista_id=$this->AsignarAnalista();

    }


    /**
     * Handle the Registro "updated" event.
     *
     * @param  \App\Models\Registro  $registro
     * @return void
     */
    public function updated(Registro $registro)
    {
        //
    }

    /**
     * Handle the Registro "deleted" event.
     *
     * @param  \App\Models\Registro  $registro
     * @return void
     */
    public function deleted(Registro $registro)
    {
        //
    }

    /**
     * Handle the Registro "restored" event.
     *
     * @param  \App\Models\Registro  $registro
     * @return void
     */
    public function restored(Registro $registro)
    {
        //
    }

    /**
     * Handle the Registro "force deleted" event.
     *
     * @param  \App\Models\Registro  $registro
     * @return void
     */
    public function forceDeleted(Registro $registro)
    {
        //
    }




    // --------------------------AUX-------------------------------
    
    /**
     * Contiene criterios para asignación de petición a analista.
     *
     * @return $analista
     */
    private function AsignarAnalista(){

       $analista= Analista::inRandomOrder()->first();

        return $analista->id;

    }


}
