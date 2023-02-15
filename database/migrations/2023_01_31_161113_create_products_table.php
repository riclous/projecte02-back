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

            // per esborrar en cascada
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');

            $table->unsignedBigInteger('categoriesId');

            $table->string('name', 30)->nullable()->false;
            $table->decimal('price', 4, 2)->nullable()->default(0.0);
            $table->decimal('tva', 3, 1)->nullable()->default(21.0);
            $table->string('description', 255)->nullable()->default('');
            $table->string('image');
            $table->integer('stock')->unsigned()->nullable()->default(0);

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
