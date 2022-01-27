<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sma extends Model
{
    use HasFactory;
    protected $table = 'smas';
    protected $fillable = ['nama', 'alamat', 'keterangan', 'foto', 'website', 'lat', 'lng'];
}
