<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    protected $primaryKey = "id";
    protected $fillable = ["nim", "name", "prodi", "angkatan", "alamat"];
}
