<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table extends Model
{
    use HasFactory;

    protected $table='table';

    protected $fillable=[
        'id',
        'nama',
        'ukuran',
        'harga',
    ];
}


