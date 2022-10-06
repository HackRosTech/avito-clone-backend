<?php

namespace App\Models\work\vacancy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'vacancy_schedule';
    protected $guarded = false;
}
