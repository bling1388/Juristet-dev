<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masa extends Model
{
    use HasFactory;
    protected $fillable = ['kerkesa_prokurorise', 'kerkesa_mbrojtjes', 'vendimi_mases_date', 'vendimi_mases_file', 'ievp',
        'ankimimi', 'file', 'data', 'trupa_gjykuese', 'vendimi_apel', 'zevendesimi_mases_data'];
}
