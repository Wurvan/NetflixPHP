<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosGenere extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'idVideoVG',
        'idGenereVG',
    ];
}
