<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeAndRediractionKeyInNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('notifications', function (Blueprint $table) {

        //     if (Schema::hasColumn('notifications', 'session_id')){
        //         $table->dropColumn('session_id');
        //     }

        //     if (Schema::hasColumn('notifications', 'post_id')){
        //         $table->dropColumn('post_id');
        //     }

        //     $table->string('type')->nullable();
        //     $table->string('redirect_id')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('notifications', function (Blueprint $table) {

        //     $table->dropColumn(['type', 'redirect_id']);

        //     if (!Schema::hasColumn('notifications', 'session_id')){
        //         $table->string('session_id')->nullable();
        //     }

        //     if (!Schema::hasColumn('notifications', 'post_id')){
        //         $table->string('post_id')->nullable();
        //     }

        // });
    }
}
