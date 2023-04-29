<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //to prevent vulnerability
    protected $fillable= [
        'title',
        'description'
    ];
}
