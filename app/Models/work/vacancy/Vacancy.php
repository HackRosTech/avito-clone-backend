<?php

namespace App\Models\work\vacancy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'vacancies';
    protected $guarded = false;

    public function schedule(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Schedule::class, 'id', 'schedule_id');
    }

    public function profession(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Profession::class, 'id', 'professions_id');
    }
}
