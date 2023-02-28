<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPayment extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'idPayment',
        'idUserCP',
    ];
}
