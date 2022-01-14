<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOtpVerifiedColumnsToSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropColumn('otp_verified');
            $table->boolean('tutor_otp_verified')->default(0)->comment("0=>no,1=yes");
            $table->boolean('creator_otp_verified')->default(0)->comment("0=>no,1=yes");
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
            $table->dropColumn(['tutor_otp_verified','creator_otp_verified']);
        });
    }
}
