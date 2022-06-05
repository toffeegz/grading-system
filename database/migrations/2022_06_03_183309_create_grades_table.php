<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('student_subject_id')->unique();
            $table->double('grade')->nullable();
            $table->double('project_id')->nullable();
            $table->double('assignment_id')->nullable();
            $table->double('attendance_id')->nullable();
            $table->double('exam_id')->nullable();
            $table->double('standing_id')->nullable();
            $table->double('recitation_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
