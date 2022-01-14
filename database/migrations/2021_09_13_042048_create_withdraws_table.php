<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->double('previous_balance', 10, 2);
            $table->double('withdraw_amount', 10, 2);
            $table->double('left_of_balance', 10, 2);
            $table->integer('status')->default(0)->comment("0=Pending, 1=Processing, 2=Completed, 3=Rejected");
            $table->string('transaction_type')->nullable();
            $table->string('transaction_via')->nullable();
            $table->string('transaction_id')->nullable();
            $table->text('rejected_reason')->nullable();
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
        Schema::dropIfExists('withdraws');
    }
}
