<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payouts extends Model
{
    protected $table = 'payout';
    protected $primaryKey = 'id';
    protected $fillable = ['teacher_id', 'price'];
    use HasFactory;
}
