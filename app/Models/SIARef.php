<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SIARef extends Model
{
    use HasFactory;

    protected $table = 's_i_a_refs';

    protected $fillable = [
        'siaRef_kod',
        'siaRef_desc',
        'created_at',
        'created_by',
        'updated_by',
    ];
}
