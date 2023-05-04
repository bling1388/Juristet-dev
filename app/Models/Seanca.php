<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seanca extends Model
{
    use HasFactory;
    protected $fillable = ['data', 'koment', 'pergatitje', 'trupa_gjykuese', 'dosja_penale_id'];
}
