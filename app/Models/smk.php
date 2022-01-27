<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smk extends Model
{
    use HasFactory;
    protected $table = 'smks';
    protected $fillable = ['nama', 'alamat', 'keterangan', 'foto', 'website', 'lat', 'lng'];
}
