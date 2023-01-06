<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $fillable = [
        'namaBank',
        'nominal',
        'status',
        'payment_id',
        'pemilikRek',
        'imageBukti'
    ];  
    use HasFactory;

}
