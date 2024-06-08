<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paises extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'paises';
    protected $primaryKey = 'PK_PAIS';
    protected $fillable = [
        'PK_PAIS',
        'TX_NOMBRE',
        'TX_CODIGO',
        'TX_CODIGO_MONEDA',
        'BL_ESTADO'
    ];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this -> belongsTo('App\Models\Paises','PK_PAIS');
    }
}
