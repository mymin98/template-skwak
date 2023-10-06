<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SIARef extends Model
{
    use HasFactory;

    protected $fillable = [
        'siaRef_kod',
        'siaRef_desc',
        'created_by',
        'updated_by',
    ];
}
