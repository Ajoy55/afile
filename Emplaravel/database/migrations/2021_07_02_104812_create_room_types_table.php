<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();

           $table->string('short_code')->nullable();
            $table->string('room_type')->nullable();
            $table->string('base_adult')->nullable();
            $table->string('base_child')->nullable();
            $table->string('max_adult')->nullable();
            $table->string('max_child')->nullable();
            $table->string('publish_to_website')->nullable();
            $table->string('is_paymaster')->nullable();
            $table->string('color')->nullable();
            $table->string('select_room_amenities')->nullable();
            $table->string('select_taxes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
}
