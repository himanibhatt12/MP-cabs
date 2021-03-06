<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToVehicleReviewTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('vehicle_review', function (Blueprint $table) {
			$table->index(['vehicle_id', 'user_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('vehicle_review', function (Blueprint $table) {
			$table->dropIndex(['vehicle_id', 'user_id']);
		});
	}
}
