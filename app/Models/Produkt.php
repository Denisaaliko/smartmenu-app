<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{
    protected $table = "produkt";
    protected $primaryKey = 'ProduktID';
    public $timestamps = false;
    protected $fillable = [
        'Emer',
        'Çmim',
        'Kalori',
        'Imazh'
    ];
}
