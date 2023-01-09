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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('catagory_id');
            $table->unsignedInteger('color_id');
            $table->unsignedInteger('size_id');
            $table->unsignedInteger('vendor_id');
            $table->unsignedInteger('qty');
            $table->string('name');
            $table->string('image');
            $table->string('multi_image');
            $table->float('price',8,2);
            $table->boolean('status');
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
        Schema::dropIfExists('products');
    }
};
