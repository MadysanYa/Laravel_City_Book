<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('category_id')->index()->nullable(); // ->nullable()
            $table->string('title')->nullable();
            $table->string('phone')->default('069 313 251');
            $table->string('email')->default('madysanya@gmail.com');
            $table->string('image')->default('1.jpg');
            $table->integer('review')->default('20');
            $table->integer('rate')->default('5');
            $table->string('location')->default('Phnom Penh');
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->boolean('active')->default('1');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // cascade : user for delete when we delete parent table child table will delete auto 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); // set null  : user for keep child table when we delete parent table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
