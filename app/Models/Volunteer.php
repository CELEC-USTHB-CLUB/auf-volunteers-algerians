<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model {
    use HasFactory;
    protected $fillable = ["firstname", "lastname", "email", "Occupation", "blood_group", "phone", "phone2"];
}
