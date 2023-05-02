<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vouture extends Model
{
    use HasFactory;
    protected $fillable = ['matricule',
     'kilometrage', 
     'destination', 
     'motif'];
}
