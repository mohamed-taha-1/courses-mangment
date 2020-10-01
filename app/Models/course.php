<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table='course';
    protected $fillable = ['instructor', 'price', 'parent_class','room','name'];
    public $timestamps=false;
}
