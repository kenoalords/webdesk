<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('invoice_id')->unsigned();
            $table->float('amount_paid', 8, 2);
            $table->float('amount_due', 8, 2);
            $table->float('amount_difference', 8, 2)->default(0);
            $table->string('medium')->nullable();
            $table->string('approved_by')->default('paystack');
            $table->integer('paystack_id')->nullable();
            $table->string('paystack_reference')->nullable();
            $table->float('paystack_fees', 8, 2)->nullable();
            $table->string('paystack_customer_code')->nullable();
            $table->string('authorization_code')->nullable();
            $table->string('bin')->nullable();
            $table->string('signature')->nullable();
            $table->string('last4')->nullable();
            $table->string('card_type')->nullable();
            $table->string('bank')->nullable();
            $table->string('country_code')->nullable();
            $table->string('brand')->nullable();
            $table->ipAddress('ip')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
