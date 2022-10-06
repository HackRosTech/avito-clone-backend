<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('salary');
            $table->string('phone');
            $table->foreignId('schedule_id');
            $table->foreignId('professions_id');
            $table->timestamps();

            $table->index('schedule_id', 'vacancy_schedule_idx');
            $table->foreign('schedule_id','vacancy_schedule_fk')->on('vacancy_schedule')->references('id');

            $table->index('professions_id', 'vacancy_professions_idx');
            $table->foreign('professions_id')->on('vacancy_professions')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
