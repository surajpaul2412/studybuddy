<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->comment('Session Creator');
            $table->integer('tutor_id')->comment('Assigned Tutor');
            $table->string('message')->nullable();
            $table->text('description')->nullable();
            $table->integer('subject_id');
            $table->integer('type')->comment('0=>Offline, 1=>Online');
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->decimal('income')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('address')->nullable();
            $table->integer('is_organized_by')->nullable()->comment('0=>University,1=>Student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
