<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    
    //protected fillable='nama','dll';
    protected $table='Warga';
    protected $guarded = [];
}
