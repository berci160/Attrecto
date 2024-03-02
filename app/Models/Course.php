<?php

namespace App\Models;

use App\Http\Controllers\CourseController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['tittle','description','author','url'];
}
