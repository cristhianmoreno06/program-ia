<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_person', function (Blueprint $table) {
            $table->id();
            $table->string('person');
            $table->integer('value_1');
            $table->integer('value_2');
            $table->integer('value_3');
            $table->integer('value_4');
            $table->integer('value_5');
            $table->integer('value_6');
            $table->integer('value_7');
            $table->integer('value_8');
            $table->integer('value_9');
            $table->integer('value_10');
            $table->integer('value_11');
            $table->integer('value_12');
            $table->integer('value_13');
            $table->integer('value_14');
            $table->integer('value_15');
            $table->integer('value_16');
            $table->integer('value_17');
            $table->integer('value_18');
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
        Schema::dropIfExists('table_person');
    }
}
