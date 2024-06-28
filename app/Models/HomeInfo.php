<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeInfo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'favicon', 'logo', 'contenTitle', 'phone', 'email', 'about'];
    protected $except = [];
    protected $table = 'home_info';
}
