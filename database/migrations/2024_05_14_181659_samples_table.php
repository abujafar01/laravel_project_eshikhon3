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
        Schema::create('samples',function(Blueprint $table){
            $table->increments('id');
            $table->string('name', '100');
            $table->text('description');
            $table->integer('rating')->unsigned();
            $table->date('birth_day');
            $table->boolean('contirmed');
            $table->char('accoun_number','20');
            $table->datetime('Post_time');
            $table->float('amount',6,4);
            $table->ipAddress('visitor');
            $table->unsignedTinyInteger('field1');
            $table->softdeletes();
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
        //
    }
};
