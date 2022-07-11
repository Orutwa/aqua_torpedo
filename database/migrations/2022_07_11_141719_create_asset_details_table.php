<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_details', function (Blueprint $table) {
            $table->id();
            $table->string('type_id');
            $table->string('brand_id');
            $table->string('chassis_number')->unique();
            $table->string('engine_number')->unique();
            $table->string('license')->unique();
            $table->string('color');
            $table->string('condition');
            $table->string('mileage');
            $table->string('associated_user');
            $table->string('status');
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
        Schema::dropIfExists('asset_details');
    }
};
