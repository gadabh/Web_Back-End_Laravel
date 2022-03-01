<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guide extends Model
{
    protected $table = 'guide_touristique';
    protected $primaryKey = 'id_g';
    use HasFactory;
    public $timestamps=false;
}
