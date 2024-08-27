<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batch';
    protected $primaryKey = 'id';
    protected $fillable = ['batch_name', 'course_id', 'start_date'];
    use HasFactory;
}
