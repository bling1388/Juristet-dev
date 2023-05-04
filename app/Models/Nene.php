<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nene extends Model
{
    use HasFactory;
    protected $fillable = ['emri', 'titulli', 'pershkrimi', 'publikimi'];
}
