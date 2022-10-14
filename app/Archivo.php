<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Archivo extends Model
{
    
    
    protected  $primaryKey = 'id_archivo';
    protected $table = 'archivo';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',  'id_producto', 'url', 'principal'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    /**
     *
     */

    public function producto() {
        return $this->belongsTo('App\Producto');
    }

    public function __toString() {
        if(is_null($this->Archivo)) {
            return 'NULL';
        }
        return $this->Archivo;
    }
}
