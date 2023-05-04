<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klient extends Model
{
    use HasFactory;
    protected $fillable = ['emer', 'atesia', 'mbiemer', 'id_nr', 'i_denuar', 'statusi_civil', 'femije_te_mitur',
        'personi_kontaktit', 'numri_kontaktit', 'arsimi', 'user_id'];
}
