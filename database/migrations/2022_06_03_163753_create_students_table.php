<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->unique();
            $table->string('code')->unique();
            $table->boolean('is_regular')->default(true);
            $table->unsignedTinyInteger('year_level')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('birth_date')->nullable();
            $table->unsignedTinyInteger('gender')->default(0)->comment('0-notspecified/1-male/2-female');
            $table->unsignedTinyInteger('marital_status')->default(0)->comment('0-single');
            $table->text('address')->nullable();
            $table->date('inactive_date')->nullable();
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
        Schema::dropIfExists('students');
    }
}
