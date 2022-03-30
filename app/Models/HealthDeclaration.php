<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthDeclaration extends Model
{
    use HasFactory;
    protected $table = 'health_declarations';
    public $timestamps = false;
    public $guarded = [];
}
