<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class historial extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'historial';
    protected $primaryKey = 'PK_HISTORIAL';
    protected $fillable = [
        'PK_HISTORIAL',
        'CIUDADDESTINO',
        'CONVERSION',
        'HUMEDAD',
        'IPCONSULTA',
        'LATITUD',
        'LONGITUD',
        'MONEDAREPRESENTACION',
        'NOMBREMONEDA',
        'NOMBREPC',
        'PAISDESTINO',
        'ORIGEN',
        'PRECIO',
        'PRESUPUESTO',
        'TEMPERATURA',
        'TEMPERATURAMAXIMA',
        'TEMPERATURAMINIMA',
        'FK_CIUDAD'
    ];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this -> belongsTo('App\Models\historial','PK_HISTORIAL');
    }
}
