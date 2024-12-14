<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'release_year',
        'length',
        'rating',
    ];
}
