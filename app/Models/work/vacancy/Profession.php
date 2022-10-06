<?php

namespace App\Models\work\vacancy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    protected $table = 'vacancy_professions';
    protected $guarded = false;
}
