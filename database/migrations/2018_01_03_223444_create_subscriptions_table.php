<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('package_id')->unsigned();
            $table->boolean('has_domain')->default(false);
            $table->string('domain_name');
            $table->text('notes')->nullable();
            $table->boolean('include_logo')->default(false);
            $table->boolean('is_active')->default(false);
            $table->integer('progress')->default(0);
            $table->enum('renew_interval', [1,6,12])->default(1);
            $table->string('progress_description')->nullable();
            $table->timestamp('expires')->useCurrent();
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
        Schema::dropIfExists('subscriptions');
    }
}
