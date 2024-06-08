<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudades extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'ciudades';
    protected $primaryKey = 'PK_CIUDAD';
    protected $fillable = [
        'PK_CIUDAD',
        'TX_CIUDAD',
        'NU_CODIGO',
        'BL_ESTADO',
        'FK_PAIS',
    ];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this -> belongsTo('App\Models\ciudades','PK_CIUDAD');
    }}
