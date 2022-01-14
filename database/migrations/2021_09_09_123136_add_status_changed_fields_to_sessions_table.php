<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusChangedFieldsToSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->boolean('tutor_ready')->default(0)->comment("0=>no,1=yes");
            $table->boolean('creator_ready')->default(0)->comment("0=>no,1=yes");
            $table->boolean('otp_verified')->default(0)->comment("0=>no,1=yes");
            $table->string('otp')->nullable();
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
            $table->dropColumn(['tutor_ready','creator_ready','otp_verified','otp']);
        });
    }
}
