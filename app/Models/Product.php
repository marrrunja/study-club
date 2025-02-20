<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ["code", "name", "description", "qty", "price"];
}
