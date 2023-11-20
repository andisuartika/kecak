<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    use HasFactory;

    protected $fillable = [
        'comunity_name',
        'village_id',
        'contact_name',
        'comunity_desc',
        'comunity_logo',
    ];
}
