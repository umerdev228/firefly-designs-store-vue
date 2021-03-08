<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomMessageToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
            $table->string('custom_message_for_schedule_delivery')->nullable();
            $table->string('custom_message_for_schedule_delivery_ar')->nullable();

            $table->boolean('Bookeey')->default(true);
            $table->boolean('Knet')->default(true);
            $table->boolean('Credit')->default(true);
            $table->boolean('Cash')->default(true);
            $table->string('default_payment_method')->default('Cash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
