<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentOnAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::table('loan_schedules', function ($table) {
			$table->integer('payment_on_account_id')->nullable();
		});
		Schema::table('loan_repayments', function ($table) {
			$table->integer('payment_on_account_id')->nullable();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('loan_schedules', function ($table) {
			$table->dropColumn([
				'payment_on_account_id'
			]);
		});
		Schema::table('loan_repayments', function ($table) {
			$table->dropColumn([
				'payment_on_account_id'
			]);
		});
    }
}
