<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    /**
     * The table associated with the model
     * 
     * @var string
     */
    public $timestamps = false;
    protected $fillable = [
        'paymentDate',
    ];
}
