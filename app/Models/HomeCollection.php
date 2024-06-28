<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCollection extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slider'];

    protected $except = ['content'];

    protected $table = "collection";
}
