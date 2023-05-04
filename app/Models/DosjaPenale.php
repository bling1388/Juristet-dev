<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosjaPenale extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'baza_ligjore', 'veprime_ne_polici', 'komisariati', 'prokuror', 'file', 'user_id', 'klient_id'];
}
