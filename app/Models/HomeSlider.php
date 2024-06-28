<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image'];

    protected $except = ['content'];

    protected $table = 'home_slider';
}
