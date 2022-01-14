<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorDetailsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('tutor_details', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->integer('type')->comment('0=>university,1=>private')->nullable();
			$table->text('education');
			$table->string('gender')->nullable();
			$table->text('headline');
			$table->longText('introduction');
			$table->integer('native_language')->nullable();
			$table->integer('secondary_language')->nullable();
			$table->integer('secondary_language_level')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('address')->nullable();
			$table->longText('zoom')->nullable();
			$table->double('hour_rate', 10, 8)->nullable();
			$table->string('available_from')->nullable();
			$table->string('available_to')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('tutor_details');
	}
}
