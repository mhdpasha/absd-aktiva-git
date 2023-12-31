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
        Schema::create('item_requests', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('user_id');
            $table->string('category');
            $table->string('itemcode');
            $table->string('name');
            $table->text('description');
            $table->boolean('isFurniture');
            $table->boolean('isHistory')->nullable();
            $table->boolean('status')->nullable();
            $table->date('date')->nullable();
            $table->bigInteger('price')->nullable();
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
        Schema::dropIfExists('item_requests');
    }
};
