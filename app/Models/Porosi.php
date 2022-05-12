<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porosi extends Model
{
    use HasFactory;
    protected $primaryKey = 'PorosiID';
    protected $table = "porosi";
    protected $guarded = [];
    public $timestamps = false;
}
