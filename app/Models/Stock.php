<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $timestamps = true;
    use HasFactory;
    protected $table = 'stocks';
    protected $fillable = ['description','image','price','cost','quantity'];
}
