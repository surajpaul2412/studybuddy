<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStudentCreatorFieldsToSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->integer('tutor_status')->default(0)->comment("0=>pending,1=accepted,2=reject");
            $table->integer('creator_status')->default(0)->comment("0=>pending,1=accepted,2=reject");
            $table->integer('status')->default(0)->comment("0=>pending,1=>accepted,2=started,3=completed,4=>cancelled");
            $table->text('message')->change();
            $table->text('address')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropColumn(['tutor_status','creator_status','status']);
            $table->string('message')->change();
            $table->string('address')->change();
        });
    }
}
